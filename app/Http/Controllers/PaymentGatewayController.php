<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

class PaymentGatewayController extends Controller
{
    public function pay(Request $req)
    {


        $final_amount = (int)$req->final_amount;

        if (is_int($final_amount) && $final_amount > 0) {


            $validated = $req->validate([
                'donar_name' => 'required',
                'mobile_number' => 'required',
                'email' => 'required',
                'final_amount' => 'required'
            ]);


            $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

            //   $api = new Api('rzp_test_ajH1Q4xLXnBREN', 's6gggfiherpRMQaV1EHmGjbW');

            $response = $api->order->create(array('receipt' => '123', 'amount' => $req->final_amount * 100, 'currency' => 'INR', 'notes' => array('customer_name' => $req->donar_name, 'mobile' => $req->mobile_number, 'email' => $req->email)));


            DB::table(env('DB_TABLE'))->insert([
                'name' => $req->donar_name,
                'mobile' => $req->mobile_number,
                'email' => $req->email,
                'pan_number' => $req->pan_number,
                'order_id' => $response->id,
                'address_one' => $req->address,
                'address_two' => $req->address2,
                'address_three' => $req->address3,
                'address_four' => $req->address4,
                'city' => $req->city,
                'state' => $req->state,
                'pin_code' => $req->pin_code,
                'amount' => $req->final_amount,
                'created_at' => now(),

            ]);

            return view('paymentview.pay', ['data' => $response]);
        } else {

            return redirect()->route('annadaan-seva');
        }
    }






    public function payStatus(Request $req)
    {


        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        //   $api = new Api('rzp_test_ajH1Q4xLXnBREN', 's6gggfiherpRMQaV1EHmGjbW');

        $payment_id = $req->get('payment_id');

        $status = $api->payment->fetch($payment_id);

        if ($status->status == "captured") {

            $order_id = $req->get('order_id');


            DB::table(env('DB_TABLE'))->where('order_id', $order_id)->update([
                'payment_id' => $payment_id,
                'status' => 'success'
            ]);

            $amount =  $status->amount / 100;

            $mobile = $status->notes->mobile;

            $name = $status->notes->customer_name;

            return redirect()->route('payment-success', ["payID" => $payment_id, "name" => $name, "mobile" => $mobile, "amount" => $amount]);
        } else {


            return "Payment was failed";
        }
    }
    public function getPaymentDetails(Request $req)
    {
        try {
            // Initialize Razorpay API
            $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

            // Get payment_id from request query (GET ?payment_id=xxxx)
            $payment_id = $req->get('payment_id');

            if (!$payment_id) {
                return response()->json(['error' => 'Payment ID is required'], 400);
            }

            // Fetch payment details
            $payment = $api->payment->fetch($payment_id);

            // Return as JSON response
            return response()->json([
                'payment_id' => $payment->id,
                'order_id'   => $payment->order_id,
                'status'     => $payment->status,
                'method'     => $payment->method,
                'amount'     => $payment->amount / 100, // INR
                'currency'   => $payment->currency,
                'email'      => $payment->email,
                'contact'    => $payment->contact,
                'created_at' => date('Y-m-d H:i:s', $payment->created_at),
                'notes'      => $payment->notes,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 500);
        }
    }
}