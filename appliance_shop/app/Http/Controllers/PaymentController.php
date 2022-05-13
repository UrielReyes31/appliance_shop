<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;
use PayPal\Exception\PayPalConnectionException;
use PayPal\Api\PaymentExecution;
use PayPal\Common\PayPalResourceModel;

use App\Models\Producto;



class PaymentController extends Controller

{
    private $apiContext;
    public function __construct(){
        $paypalC = Config::get('paypal');
        
        $this->apiContext = new ApiContext(
            new OAuthTokenCredential(
                $paypalC['client_id'],     // ClientID
                $paypalC['secret']      // ClientSecret
            )
    );
    }

    public function paypalpago($id){
        $producto = Producto::find($id);

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $amount = new Amount();
        $amount->setTotal($producto->Precio );
        $amount->setCurrency('MXN');

        $transaction = new Transaction();
        $transaction->setAmount($amount);

        $callbackUrl = url('/paypal/staus');
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl($callbackUrl)
            ->setCancelUrl($callbackUrl);

        $payment = new Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setTransactions(array($transaction))
            ->setRedirectUrls($redirectUrls);

            try {
                $payment->create($this->apiContext);
                echo $payment;
        
                
                return redirect()->away($payment->getApprovalLink());
            }
            catch (PayPalConnectionException $ex) {
            
                echo $ex->getData();
            }
        }      
        public function paypalstatus(Request $request){

           $paymentId = $request->input('paymentId');
           $playerId = $request->input('PayerID');
           $token = $request->input('token');

           if(!$paymentId || !$playerId || !$token){
               $staus = 'No se logro realizar el pago';
               return redirect('/paypal/error')->with(compact('status'));
           }
           $payment = Payment::get($paymentId,$this->apiContext);

           $execution = new PaymentExecution();
           $execution-> setPayerId($playerId);

           $result = $payment->execute($execution,$this->apiContext);

           if($result->getState()==='approved'){
               $staus = 'Pago realizado correctamente';
               return redirect('productos')->with('SiRealizado', 'ok');
           }
           $staus = 'Pago no realizado correctamente por paypal';
               return redirect('productos')->with('NoRealizado', 'ok');
        }
}
