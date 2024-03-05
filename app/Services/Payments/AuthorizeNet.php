<?php

namespace App\Services\Payments;

use App\DTO\Payment;
use App\Interfaces\PaymentGateway;
use DateTime;
use Illuminate\Http\Request;
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;

class AuthorizeNet implements PaymentGateway {
    const MONTHLY_OCCURRENCE = '12';
    const ANNUALLY_OCCURENCE = '1';

    private AnetAPI\MerchantAuthenticationType $merchantAuthentication;

    public function __construct()
    {
        $this->merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
        $this->merchantAuthentication->setName(env('MERCHANT_LOGIN_ID'));
        $this->merchantAuthentication->setTransactionKey(env('MERCHANT_TRANSACTION_KEY'));
    }

    public function subscription(Payment $payment)
    {
        $intervalLength = 30;
        $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
        $merchantAuthentication->setName(env('MERCHANT_LOGIN_ID'));
        $merchantAuthentication->setTransactionKey(env('MERCHANT_TRANSACTION_KEY'));
        $refId = 'ref' . now()->format('Y-m-d');
        $subscription = new AnetAPI\ARBSubscriptionType();
        $subscription->setName($payment->order_title);
        $interval = new AnetAPI\PaymentScheduleType\IntervalAType();
        $interval->setLength($intervalLength);
        $interval->setUnit($payment->unit);
        $paymentSchedule = new AnetAPI\PaymentScheduleType();
        $paymentSchedule->setInterval($interval);
        $paymentSchedule->setStartDate(new DateTime());
        if ($payment->subscription_type == 'monthly') {
            $paymentSchedule->setTotalOccurrences(self::MONTHLY_OCCURRENCE);
        } elseif ($payment->subscription_type == 'annually') {
            $paymentSchedule->setTotalOccurrences(self::ANNUALLY_OCCURANCE);
        }
        $paymentSchedule->setTrialOccurrences("1");
        $subscription->setPaymentSchedule($paymentSchedule);
        $subscription->setAmount(rand(1, 99999) / 12.0 * 12);
        $subscription->setTrialAmount("0.00");
        $creditCard = new AnetAPI\CreditCardType();
        $creditCard->setCardNumber($payment->card_number);
        $creditCard->setExpirationDate('20' . $payment->card_exp_year . '-' . $payment->card_exp_month);
        $paymentReccurent = new AnetAPI\PaymentType();
        $paymentReccurent->setCreditCard($creditCard);
        $subscription->setPayment($paymentReccurent);
        $order = new AnetAPI\OrderType();
        $order->setInvoiceNumber($payment->tnx_id);
        $order->setDescription($payment->description);
        $subscription->setOrder($order);
        $billTo = new AnetAPI\NameAndAddressType();
        $billTo->setFirstName($payment->card_holder_first_name);
        $billTo->setLastName($payment->card_holder_last_name);
        $subscription->setBillTo($billTo);
        $request = new AnetAPI\ARBCreateSubscriptionRequest();
        $request->setmerchantAuthentication($merchantAuthentication);
        $request->setRefId($refId);
        $request->setSubscription($subscription);
        $controller = new AnetController\ARBCreateSubscriptionController($request);
        $response = $controller->executeWithApiResponse( \net\authorize\api\constants\ANetEnvironment::SANDBOX);
        return $response;
    }

    public function oneTime(Payment $payment)
    {
        $refId = $payment->ref_id;
        $creditCard = new AnetAPI\CreditCardType();
        $creditCard->setCardNumber($payment->card_number);
        $creditCard->setExpirationDate($payment->card_exp_month.$payment->card_exp_year);
        $paymentOne = new AnetAPI\PaymentType();
        $paymentOne->setCreditCard($creditCard);
        $order = new AnetAPI\OrderType();
        $order->setInvoiceNumber($payment->tnx_id);
        $order->setDescription($payment->description);
        $customerAddress = new AnetAPI\CustomerAddressType();
        $customerAddress->setFirstName($payment->card_holder_first_name);
        $customerAddress->setLastName($payment->card_holder_last_name);
        $customerData = new AnetAPI\CustomerDataType();
        $customerData->setEmail($payment->card_holder_email);
        $transactionRequestType = new AnetAPI\TransactionRequestType();
        $transactionRequestType->setTransactionType("authCaptureTransaction");
        $transactionRequestType->setAmount($payment->amount);
        $transactionRequestType->setPayment($paymentOne);
        $transactionRequestType->setOrder($order);
        $transactionRequestType->setBillTo($customerAddress);
        $transactionRequestType->setCustomer($customerData);
        $request = new AnetAPI\CreateTransactionRequest();
        $request->setMerchantAuthentication($this->merchantAuthentication);
        $request->setRefId($refId);
        $request->setTransactionRequest($transactionRequestType);
        $controller = new AnetController\CreateTransactionController($request);
        $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);
        return $response;
    }

    public function pay(Payment $payment)
    {
        if ($payment->type === 'one-time') {
            $response = $this->oneTime($payment);
            return $response;
        } else {
            $response = $this->subscription($payment);
            return $response;
        }
    }

    public function refund(array $data)
    {
        $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
        $merchantAuthentication->setName(env('MERCHANT_LOGIN_ID'));
        $merchantAuthentication->setTransactionKey(env('MERCHANT_TRANSACTION_KEY'));

        // Set the transaction's refId
        $refId = 'ref' . now()->format('Y-m-d');

        $creditCard = new AnetAPI\CreditCardType();
        $creditCard->setCardNumber($data['card_number']);
        $creditCard->setExpirationDate($data['exp_year'] .'-'. $data['exp_month']);

        // Add the payment data to a paymentType object
        $paymentOne = new AnetAPI\PaymentType();
        $paymentOne->setCreditCard($creditCard);

        $transactionRequest = new AnetAPI\TransactionRequestType();
        $transactionRequest->setTransactionType("refundTransaction");
        $transactionRequest->setAmount($data['amount']);
        $transactionRequest->setPayment($paymentOne);
        $transactionRequest->setRefTransId($data['refund_trx_id']);

        $request = new AnetAPI\CreateTransactionRequest();
        $request->setMerchantAuthentication($merchantAuthentication);
        $request->setRefId($refId);
        $request->setTransactionRequest( $transactionRequest);
        $controller = new AnetController\CreateTransactionController($request);
        $response = $controller->executeWithApiResponse( \net\authorize\api\constants\ANetEnvironment::SANDBOX);

        return $response;
    }

    public function status(array $data)
    {
            /* Create a merchantAuthenticationType object with authentication details
       retrieved from the constants file */
        $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
        $merchantAuthentication->setName(env('MERCHANT_LOGIN_ID'));
        $merchantAuthentication->setTransactionKey(env('MERCHANT_TRANSACTION_KEY'));

        // Set the transaction's refId
        // The refId is a Merchant-assigned reference ID for the request.
        // If included in the request, this value is included in the response.
        // This feature might be especially useful for multi-threaded applications.
        $refId = 'ref' . now()->format('Y-m-d');

        $request = new AnetAPI\GetTransactionDetailsRequest();
        $request->setMerchantAuthentication($merchantAuthentication);
        $request->setTransId($data['old_trx_id']);

        $controller = new AnetController\GetTransactionDetailsController($request);

        $response = $controller->executeWithApiResponse( \net\authorize\api\constants\ANetEnvironment::SANDBOX);

        return $response;
    }


    public function callback(array $data)
    {

    }

}
