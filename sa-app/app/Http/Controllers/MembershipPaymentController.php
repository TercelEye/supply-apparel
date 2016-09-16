<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MembershipPaymentController extends Controller
{
    
    public function config()
    {
        // Credentials
        // https://developer.paypal.com/developer/accounts/

        // AppId
        // https://www.paypal-apps.com/user/my-account/applications/manage#most_recent

        return [
            'mode'            => 'sandbox',
            'acct1.AppId'     => 'APP-80W284485P519543T',
            'acct1.UserName'  => 'billing-facilitator_api1.twotechno.host',
            'acct1.Password'  => 'FHVKTB5RPFKT6ZQF',
            'acct1.Signature' => 'AFcWxV21C7fd0v3bYYYRCpSSRl31A9Y4GpU60hJ6yKMlmC0Argr3p7Th',
        ];
    }

    /**
     * Redirect to Paypal.
     */
    public function redirect($payKey = '')
    {
        $url = redirect('https://www.sandbox.paypal.com/webapps/adaptivepayment/flow/pay?expType=light&payKey=' . $payKey);

        return $url;
    }

    public function index()
    {

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
        $actionType      = 'PAY';
        $cancelUrl       = 'http://sdasdasd/url-payment-cancel';
        $returnUrl       = 'http://asdasd/url-payment-success';

        $currencyCode = 'USD';

        // Your request
        $_POST['receiverEmail']  = ['someone@example.com'];
        $_POST['receiverAmount'] = ['3.00'];

        $receiver = [];
        for ($i = 0; $i < count($_POST['receiverEmail']); ++$i) {
            // Parallel Payments
            $receiver[$i]         = new Receiver();
            $receiver[$i]->email  = $_POST['receiverEmail'][$i];
            $receiver[$i]->amount = $_POST['receiverAmount'][$i];
        }
        $receiverList = new ReceiverList($receiver);
        $payRequest   = new PayRequest($requestEnvelope, $actionType, $cancelUrl,
            $currencyCode, $receiverList, $returnUrl);

        // Set the correct the value 1, 3, 4, ...
        // PPHttpConfig::$DEFAULT_CURL_OPTS[CURLOPT_SSLVERSION] = 4;

        $config   = $this->config();
        $service  = new AdaptivePaymentsService($config);
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
