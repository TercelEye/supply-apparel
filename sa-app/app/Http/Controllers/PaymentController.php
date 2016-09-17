<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use PayPal\Api\Amount;
use PayPal\Api\CreditCard;
use PayPal\Api\Details;
use PayPal\Api\FundingInstrument;

//rest api
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Core\PPHttpConfig;
use PayPal\Rest\ApiContext;
use PayPal\Service\AdaptivePaymentsService;
use PayPal\Types\AP\PayRequest;
use PayPal\Exception\PayPalConnectionException;
//auth paypal
use PayPal\Types\AP\Receiver;
use PayPal\Types\AP\ReceiverList;

use Cart;
use \App\Order;
use \App\OrderItem;
use Auth;
use \App\Product;

class PaymentController extends Controller
{
	private $request;

    private $clientId     = 'AUsRAhOKpRVUXBooLVQyAdPtfxuQ8fqLSvi5CdlPvn2bgAPB-sNbDdaJJ4X2sF0vaUo0MG7tHtx633q6';
    private $clientSecret = 'EOAvP76bY4FryTUs0NiCmFPAFGM3Y3dM6M8oikO0lAXCDYIZYc8XI50jlFMyDfriN1ivaLBi0VtAku4w';
    private $apiContext ="";

    function __construct(Request $request){
    	$this->request= $request;
    	$this->apiContext= $this->getApiContext();


    }
    public function is_cart_empty(){
         if(Cart::totalItems(true)==0){
            return redirect('home');
        }
        return false;
    }

    //api contect for paypal sdk
    public function getApiContext()
    {
        // developer.paypal.com
        $apiContext = new ApiContext(
            new OAuthTokenCredential(
                $this->clientId,
                $this->clientSecret
            )
        );
        // 'define' block if you want to use static file
        // based configuration
        $apiContext->setConfig(
            array(
                'mode'           => 'sandbox',
                'log.LogEnabled' => true,
                'log.FileName'   => '../PayPal.log',
                'log.LogLevel'   => 'DEBUG', // PLEASE USE `INFO` LEVEL FOR LOGGING IN LIVE ENVIRONMENTS
                'cache.enabled'  => true,
                // 'http.CURLOPT_CONNECTTIMEOUT' => 30
                // 'http.headers.PayPal-Partner-Attribution-Id' => '123123123'
                //'log.AdapterFactory' => '\PayPal\Log\DefaultLogFactory' // Factory class implementing \PayPal\Log\PayPalLogFactory
            )
        );
        // To learn more or to request a BN Code, contact your Partner Manager or visit the PayPal Partner Portal
        // $apiContext->addRequestHeader('PayPal-Partner-Attribution-Id', '123123123');
        return $apiContext;
    }

    public function charge_from_card()
    {
    	  $this->validate($this->request,[
            'name'=>'required',
            'cvc'=>'required',
            'expiration_month'=>'required',
            'expiration_year'=>'required',
        ]);

        if($this->is_cart_empty()!=false){
            return $this->is_cart_empty();
        }
        // ### CreditCard
        // A resource representing a credit card that can be
        // used to fund a payment.
    	$name = explode(' ', $this->request->name); 
        $fname = $name[0];
        $lname = (isset($name[1])?$name[1]:"");

        $card = new CreditCard();
        $card->setType("visa")
            ->setNumber($this->request->card_number)
            ->setExpireMonth($this->request->expiration_month)
            ->setExpireYear($this->request->expiration_year)
            ->setCvv2($this->request->cvc)
            ->setFirstName($fname)
            ->setLastName($lname);
        // ### FundingInstrument
        // A resource representing a Payer's funding instrument.
        // For direct credit card payments, set the CreditCard
        // field on this object.
        $fi = new FundingInstrument();
        $fi->setCreditCard($card);
        // ### Payer
        // A resource representing a Payer that funds a payment
        // For direct credit card payments, set payment method
        // to 'credit_card' and add an array of funding instruments.
        $payer = new Payer();
        $payer->setPaymentMethod("credit_card")
            ->setFundingInstruments(array($fi));
// ### Itemized information
        // (Optional) Lets you specify item wise
        // information
    $items = "";
    $shipping = 0;

    foreach (Cart::contents() as $row):
        $item_shipping = $this->get_shiping_price($row->id);
        $item_totaltotal = ($row->quantity * $row->price)+$item_shipping;
        $item = new Item();
        $item->setName($row->name)
            ->setDescription($row->name)
            ->setCurrency('USD')
            ->setQuantity($row->quantity)
            ->setTax(0)
            ->setPrice( $row->price);
        $items[] = $item;
       $shipping+= $item_shipping;
    endforeach;

        $itemList = new ItemList();
        $itemList->setItems($items);
// ### Additional payment details
        // Use this optional field to set additional
        // payment information such as tax, shipping
        // charges etc.
         $Subtotal =Cart::total() + $shipping;
        $details = new Details();
        $details->setShipping($shipping)
            ->setTax(0)
            ->setSubtotal( $Subtotal);
// ### Amount
        // Lets you specify a payment amount.
        // You can also specify additional details
        // such as shipping, tax.
       
        $amount = new Amount();
        $amount->setCurrency("USD")
            ->setTotal(Cart::total())
            ->setDetails($details);
// ### Transaction
        // A transaction defines the contract of a
        // payment - what is the payment for and who
        // is fulfilling it.
        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Customer ".Auth::user()->email)
            ->setInvoiceNumber(uniqid());
// ### Payment
        // A Payment Resource; create one using
        // the above types and intent set to sale 'sale'
        $payment = new Payment();
        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setTransactions(array($transaction));
// For Sample Purposes Only.
        $request = clone $payment;
// ### Create Payment
        // Create a payment by calling the payment->create() method
        // with a valid ApiContext (See bootstrap.php for more on `ApiContext`)
        // The return object contains the state.
        try {
            $payment->create($this->apiContext);
             //dd($payment);
             if($payment->state == "approved"){
                //if payment approved
                $this->add_order();
                return $this->completed();
                exit;

             }
        }
    catch (PayPalConnectionException $ex) {
   // echo $ex->getCode(); // Prints the Error Code
    //echo $ex->getData(); // Prints the detailed error message 
      dd($request );
    return redirect()->back()->with(['card_error'=>'invalid credit card information'. $ex->getData()]);
    die($ex);
} 
 catch (Exception $ex) {
            return redirect()->back()->with(['card_error'=>"We couldn't charge from your  card"]);
            // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
            ResultPrinter::printError('Create Payment Using Credit Card. If 500 Exception, try creating a new Credit Card using <a href="https://www.paypal-knowledge.com/infocenter/index?page=content&widgetview=true&id=FAQ1413">Step 4, on this link</a>, and using it.', 'Payment', null, $request, $ex);
            exit(1);
        }
		// NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
        print_r('Create Payment Using Credit Card'."<br>".'Payment'."<br>".$payment->getId()."<br>" );
       


    }

    private function get_shiping_price($product_id=0){
        $product = Product::find($product_id);
        if($product==""){
            return 0;
        }
        if($product->shop->country_id == Auth::user()->shipping->country_id){
            //local shipping
            return $product->shipping_local_price;
        }

       return $product->shipping_int_price; 
        
    }

    private function add_order(){
        $order = new Order;
        $order->customer_id = Auth::user()->id;
        $order->total = Cart::total();
        $order->discount = 0;
        $order->items_count =Cart::totalItems(true);
        $order->save();
        foreach (Cart::contents() as $row):
            $item = new OrderItem;
            $item->qty =  $row->quantity;
            $item->total =  $row->price;
            $item->amount =  $row->price;
            $item->discount =  0;
            $item->order_id =  $order->id;
            $item->product_id =  $row->id;
            $item->save();
        endforeach;
        Cart::destroy();
    }

    public function index()
    {
        
    	if($this->is_cart_empty()){
            return $this->is_cart_empty();
        }
        $card_error = $this->request->session()->get('card_error', '');
        return view('payment',compact('card_error'));
    }

    public function completed(){
         return view('payment_completed');
    }
}
