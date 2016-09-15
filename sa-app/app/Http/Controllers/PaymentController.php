<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;


use PayPal\Core\PPHttpConfig;
use PayPal\Service\AdaptivePaymentsService;
use PayPal\Types\AP\PayRequest;
use PayPal\Types\AP\Receiver;
use PayPal\Types\AP\ReceiverList;

//rest api
use PayPal\Api\Amount;
use PayPal\Api\CreditCard;
use PayPal\Api\Details;
use PayPal\Api\FundingInstrument;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\Transaction;

use App\Http\Requests;

class PaymentController extends Controller
{
    private function charge_from_card(){
        // ### CreditCard
// A resource representing a credit card that can be
// used to fund a payment.
$card = new CreditCard();
$card->setType("visa")
    ->setNumber("4669424246660779")
    ->setExpireMonth("11")
    ->setExpireYear("2019")
    ->setCvv2("012")
    ->setFirstName("Joe")
    ->setLastName("Shopper");
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
$item1 = new Item();
$item1->setName('Ground Coffee 40 oz')
    ->setDescription('Ground Coffee 40 oz')
    ->setCurrency('USD')
    ->setQuantity(1)
    ->setTax(0.3)
    ->setPrice(7.50);
$item2 = new Item();
$item2->setName('Granola bars')
    ->setDescription('Granola Bars with Peanuts')
    ->setCurrency('USD')
    ->setQuantity(5)
    ->setTax(0.2)
    ->setPrice(2);
$itemList = new ItemList();
$itemList->setItems(array($item1, $item2));
// ### Additional payment details
// Use this optional field to set additional
// payment information such as tax, shipping
// charges etc.
$details = new Details();
$details->setShipping(1.2)
    ->setTax(1.3)
    ->setSubtotal(17.5);
// ### Amount
// Lets you specify a payment amount.
// You can also specify additional details
// such as shipping, tax.
$amount = new Amount();
$amount->setCurrency("USD")
    ->setTotal(20)
    ->setDetails($details);
// ### Transaction
// A transaction defines the contract of a
// payment - what is the payment for and who
// is fulfilling it. 
$transaction = new Transaction();
$transaction->setAmount($amount)
    ->setItemList($itemList)
    ->setDescription("Payment description")
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
    $payment->create($apiContext);
} catch (Exception $ex) {
    // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
    ResultPrinter::printError('Create Payment Using Credit Card. If 500 Exception, try creating a new Credit Card using <a href="https://www.paypal-knowledge.com/infocenter/index?page=content&widgetview=true&id=FAQ1413">Step 4, on this link</a>, and using it.', 'Payment', null, $request, $ex);
    exit(1);
}
// NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
 ResultPrinter::printResult('Create Payment Using Credit Card', 'Payment', $payment->getId(), $request, $payment);

    }

	 public function config()
    {
        // Credentials
        // https://developer.paypal.com/developer/accounts/

        // AppId
        // https://www.paypal-apps.com/user/my-account/applications/manage#most_recent

        return [
            'mode' => 'sandbox',
            'acct1.AppId' => 'APP-80W284485P519543T',
            'acct1.UserName' => 'billing-facilitator_api1.twotechno.host',
            'acct1.Password' => 'FHVKTB5RPFKT6ZQF',
            'acct1.Signature' => 'AFcWxV21C7fd0v3bYYYRCpSSRl31A9Y4GpU60hJ6yKMlmC0Argr3p7Th',
        ];
    }

    /**
     * Redirect to Paypal.
     */
    public function redirect($payKey = '')
    {
        $url = redirect('https://www.sandbox.paypal.com/webapps/adaptivepayment/flow/pay?expType=light&payKey='.$payKey);

        return $url;
    }

    /**
     * Ask Paypal for a token
     */
    public function showCheckout()
    {
       

        //return view('payment.checkout');
    }
    public function index(){


    PPHttpConfig::$DEFAULT_CURL_OPTS[CURLOPT_SSLVERSION] = 6;


// ### CreditCard
// A resource representing a credit card that can be
// used to fund a payment.
$card = new CreditCard();
$card->setType("visa")
    ->setNumber("4669424246660779")
    ->setExpireMonth("11")
    ->setExpireYear("2019")
    ->setCvv2("012")
    ->setFirstName("Joe")
    ->setLastName("Shopper");
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

     $requestEnvelope = ['errorLanguage' => 'fr_FR'];
        $actionType = 'PAY';
        $cancelUrl = 'http://sdasdasd/url-payment-cancel';
        $returnUrl = 'http://asdasd/url-payment-success';

        $currencyCode = 'USD';

        // Your request
        $_POST['receiverEmail'] = ['someone@example.com'];
        $_POST['receiverAmount'] = ['3.00'];

        $receiver = [];
        for ($i = 0; $i < count($_POST['receiverEmail']); ++$i) {
            // Parallel Payments
            $receiver[$i] = new Receiver();
            $receiver[$i]->email = $_POST['receiverEmail'][$i];
            $receiver[$i]->amount = $_POST['receiverAmount'][$i];
        }
        $receiverList = new ReceiverList($receiver);
        $payRequest = new PayRequest($requestEnvelope, $actionType, $cancelUrl,
            $currencyCode, $receiverList, $returnUrl);

        // Set the correct the value 1, 3, 4, ...
        // PPHttpConfig::$DEFAULT_CURL_OPTS[CURLOPT_SSLVERSION] = 4;

        $config = $this->config();
        $service = new AdaptivePaymentsService($config);
        $response = $service->Pay($payRequest);

        if (strtoupper($response->responseEnvelope->ack) == 'FAILURE') {
            dd($response->error);
        }
        if (strtoupper($response->responseEnvelope->ack) == 'SUCCESS') {
            return $this->redirect($response->payKey);
        }
    	return view('payment');
    }
}
