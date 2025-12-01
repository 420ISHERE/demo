<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Razorpay\Api\Api;

class Icvkregistration extends Controller
{
   
    public function icvkProgramm(Request $request)
    {
        return view ('subpages.icvk-programm');
    }
    
    public function icvkRegistration(Request $request)
    {
        return view('subpages.icvk-registration');
    }

    public function icvkRegistrationPost(Request $request)
    {
        if($request->mode)
        {
        $price = 1;
        }else{
        $price = 1;
        }
        
        $regId = DB::table('icvk_registration')
        ->insertGetId([
            'PAGE_ID'=>$request->pageid,
            'CHILD_NAME'=>$request->cname,
            'DOB'=>date('Y-m-d',strtotime($request->dob)),
            'BATCH'=>$request->batch,
            'MODE'=>$request->mode,
            'SCHOOL_NAME'=>$request->school,
            'CITY'=>$request->city,
            'PARENT_NAME'=>$request->name,
            'PHONE'=>$request->phone,
            'EMAIL'=>$request->email,
            'PAN'=>$request->pan,
            'TOTAL_AMOUNT'=>$price,
            'IS_PAID'=>'N',
            'CREATED_ON'=>date('Y-m-d H:i:s'),
        ]);

        $api = new Api (env('RAZORPAY_KEY'), env('RAZORPAY_SECRET')); 
   
        //$api = new Api('rzp_test_ajH1Q4xLXnBREN', 's6gggfiherpRMQaV1EHmGjbW');
           
        $response= $api->order->create(array(
            'receipt' => '123', 
            'amount' => $price*100, 
            'currency' => 'INR', 
            'notes'=> array(
                'customer_name'=> $request->name,
                'mobile'=> $request->phone,
                'customer_id'=>'REG'.$regId ,
                'email'=>$request->email
            )
        ));

        $paymentId = DB::table('payment_gateway_details')
        ->insertGetId([
            'REGISTRATION_ID'=>$regId,
            'PG_NAME'=>'Razorpay',
            'PG_MODE'=>'Online',
            'TRN_REF_NUMBER'=>'ICVK'.time(),
            'TRN_SOURCE'=>$request->pageid,
            'NAME'=>$request->name,
            'MOBILE_NUMBER'=>$request->phone,
            'EMAIL_ID'=>$request->email,
            'TRANSACTION_DATE'=>date('Y-m-d'),
            'CURRENCY_TYPE'=>'INR',
            'TOTAL_AMOUNT'=>$price,
            'PAYMENT_ORDER_ID'=>$response->id,
            'TRANSACTION_STATUS'=>'I',
            'CREATED_BY'=>$request->name,
            'CREATED_ON'=>date('Y-m-d H:i:s'),
        ]);
        
        session([
            'REGISTRATION_ID'=>$regId,
            'PAYMENT_ID'=>$paymentId,
            'PAYMENT_ORDER_ID'=>$response->id
        ]);
        return view('paymentview.icvkpay',['data'=>$response]);
    }

    public function icvkRegistrationPaymentStatus(Request $request)
    {
        $api = new Api (env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        
        //$api = new Api('rzp_test_ajH1Q4xLXnBREN', 's6gggfiherpRMQaV1EHmGjbW');
        
        $payment_id = $request->payment_id;
        
        $status= $api->payment->fetch($payment_id);
        
        if($status->status=="captured"){
            
           $regUpdate = DB::table('icvk_registration')
           ->where(['REGISTRATION_ID'=>session('REGISTRATION_ID')])
           ->update([
            'IS_PAID'=>'Y'
           ]);
         
           $trsnStatus = 'S';
           $banktxnId = $request->payment_id;
           $sttmentDate = date("Y-m-d");
        }else{
            
            $trsnStatus = 'F';
            $banktxnId = NULL;
            $sttmentDate = NULL;
        }

        $paymentUpdate = DB::table('payment_gateway_details')
           ->where(['REGISTRATION_ID'=>session('REGISTRATION_ID'),'PAYMENT_ID'=>session('PAYMENT_ID')])
           ->update([
            'TRANSACTION_STATUS'=>'S',
            'BANK_TRANSACTION_ID'=>$banktxnId,
            'SETTLEMENT_DATE'=>$sttmentDate,
        ]);

        return redirect()->route('icvk.payment.success');
    }
    public function icvkRegistrationPaymentSuccess(Request $request)
    {
        $regData = DB::table('icvk_registration')->where(['REGISTRATION_ID'=>session('REGISTRATION_ID')])->first();
        $payData = DB::table('payment_gateway_details')->where(['REGISTRATION_ID'=>session('REGISTRATION_ID'),'PAYMENT_ID'=>session('PAYMENT_ID')])->first();
        return view('icvk-payment-success',compact('regData','payData'));
    } 

    public function icvkRegistrationPaymentfailure(Request $request)
    {
        $regData = DB::table('icvk_registration')->where(['REGISTRATION_ID'=>session('REGISTRATION_ID')])->first();
        $payData = DB::table('payment_gateway_details')->where(['REGISTRATION_ID'=>session('REGISTRATION_ID'),'PAYMENT_ID'=>session('PAYMENT_ID')])->first();
        return view('icvk-payment-failure',compact('regData','payData'));
    }

}
