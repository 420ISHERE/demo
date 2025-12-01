<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Razorpay\Api\Api;

class GitaPaymentGateway extends Controller
{
     public function gitaYouthPayment(Request $req){
         
         
         $amount= (int)$req->amount;
    
     if(is_int($amount) && $amount>0){
         
         
             $validated = $req->validate([
             'full_name' => 'required',
             'mobile' => 'required |digits:10',
             'email' => 'required',
             'amount'=>'required'  ]);
             
             
            $customerId= time().$req->mobile;
                                
         
   $api = new Api (env('RAZORPAY_KEY'), env('RAZORPAY_SECRET')); 
   
//   $api = new Api('rzp_test_ajH1Q4xLXnBREN', 's6gggfiherpRMQaV1EHmGjbW');
           
   $response= $api->order->create(array('receipt' => '123', 'amount' => $req->amount*100, 'currency' => 'INR', 'notes'=> array('customer_name'=> $req->full_name,'mobile'=> $req->mobile,'customer_id'=>$customerId ,'email'=>$req->email)));
        

     DB::table(env('REGGITA_TABLE'))->insert([
    'full_name' => $req->full_name,
    'mobile' => $req->mobile,
    'email' => $req->email,
    'birth_date' => $req->birth_date,
    'order_id' => $response->id,
    'customer_id' => $customerId,
    'address_line_one' => $req->address_line_one,
    'address_line_two' => $req->address_line_two,
    'city' => $req->city,
    'state' => $req->state,
    'postal_code' => $req->postal_code,
    'occupation' => $req->occupation,
    'college_company' => $req->company,
    'awared_by' => $req->known,
    'payment_status' => 'created',
    'amount' => $req->amount,
    'created_at'=>now(),
    
           ]);
        
        return view('paymentview.gitapay',['data'=>$response]);
        
     }
     else{
         
         return redirect()->route('gita-for-youth');
     }
        
        
       
    }
    
    
    
    
   public function payStatus( Request $req){
        
       
        $api = new Api (env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        
    //   $api = new Api('rzp_test_ajH1Q4xLXnBREN', 's6gggfiherpRMQaV1EHmGjbW');
        
        $payment_id =$req->get('payment_id');
        
        $status= $api->payment->fetch($payment_id);
        
        if($status->status=="captured"){
            
        $customer_id =$req->get('customer_id');
             
                    
       DB::table(env('REGGITA_TABLE'))->where('customer_id', $customer_id)->update(['payment_id' => $payment_id,
       'payment_status'=>'success']);
                   
        $amount =  $status->amount/100;
                    
        $mobile = $status->notes->mobile;
                    
        $name = $status->notes->customer_name;
            
           return redirect()->route('payment-success',["payID"=>$payment_id,"name"=>$name,"mobile"=>$mobile,"amount"=>$amount ]);
            
        }else{
            
            
            return "Payment was failed";
        }
        
        
    }
}
