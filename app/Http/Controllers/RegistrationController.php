<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReceiptsEmail;

class RegistrationController extends Controller
{
    
    public function volunteer(Request $req){
        
     
        
         $validated = $req->validate([
        'full_name' => 'required',
        'mobile' => 'required |digits:10',
        'email' => 'required|email',
        
    ],['full_name.required'=>'Name field is required',
        'mobile.required'=>'Mobile number is required',
        'mobile.digits'=>'Enter 10 digit mobile number',
        
        'email.required'=>'Email field is required'
    ]);
    
     
    
     DB::table(env('VOLUNTEER_TABLE'))->insert([
          'full_name' => $req->full_name,
          'mobile' => $req->mobile,
          'alternate_number' => $req->alternate_number,
          'email' => $req->email,
          'birth_date' => $req->birth_date,
          'birth_date' => $req->birth_date,
          'gender' => $req->gender,
          'qualification' => $req->qualification,
          'Occupation' => $req->Occupation,
          'skills' => $req->skills,
          'languages' => $req->languages,
          'volunteerType' => $req->volunteerType,
          'volunteer_duration' => $req->volunteer_duration,
          'contribution_hours' => $req->contribution_hours,
          'programs' => $req->programs,
          'city' => $req->city,
          'chanting-rounds' => $req->chanting_rounds,
          'socialmedia' => $req->socialmedia,
          'message' => $req->message,
          'created_at' => now()
                                ]);
                                
     Mail::to($req->email)->send(new ReceiptsEmail("No Message","Volunteer Registration",$req->full_name));
                                
                                
        session()->flash('status',"Thank You for reaching us we will get back to you shortly");
       
    
     return redirect()->route('volunteer');
        
        
        
        
    }
    
    
    
    
    public function monReg(Request $req){
        
         $validated = $req->validate([
        'full_name' => 'required',
        'mobile' => 'required | digits:10',
        'email' => 'required|email',
        'birth_date' => 'required',
        'qualification' => 'required',
        'occupation' => 'required',
        'photo' => 'required|mimes:jpg,jpeg,png',
        
    ],[
        'full_name.required' => 'Full name is required',
        'mobile.required' => 'Mobile number is required',
        'mobile.digits' => 'Enter 10 digit mobile number only',
        'email' => 'Email is required',
        'birth_date' => 'Birth date is required',
        'qualification' => 'Education qualification is required',
        'occupation' => 'Current occupation is required',
        'photo' => 'upload your photo in jpg or png or jpeg format only',
        
    ]
    
    );
    
        $file_name = time().'_'.$req->file('photo')->getClientOriginalName();   
        $path =$req->file('photo')->storeAs('monkphotos',$file_name,'public');
        
        
        DB::table(env('MONK_TABLE'))->insert([
          'full_name' => $req->full_name,
          'mobile' => $req->mobile,
          'email' => $req->email,
          'birth_date' => $req->birth_date,
          'qualification' => $req->qualification,
          'occupation' => $req->occupation,
          'img_url' => $path,
          'created_at' => now(),
    
]);

 Mail::to($req->email)->send(new ReceiptsEmail("No Message","Monk Registration",$req->full_name));
        
        session()->flash('status',"Thank You for reaching us we will get back to you shortly");
        
         return redirect()->route('be-a-monk');
    }
    
    
    
     public function contact(Request $req){
        
         $validated = $req->validate([
        'full_name' => 'required',
        'mobile' => 'required |digits:10',
        'email' => 'required|email',
        
    ],['full_name.required'=>'Name field is required',
        'mobile.required'=>'Mobile number is required',
        'mobile.digits'=>'Enter 10 digit mobile number',
        
        'email.required'=>'Email field is required'
    ]);
    
     
    
     DB::table(env('CONTACT_TABLE'))->insert([
          'full_name' => $req->full_name,
          'mobile' => $req->mobile,
          'email' => $req->email,
          'subject' => $req->subject,
          'message' => $req->message,
          'created_at' => now()
                                ]);
                                
     Mail::to($req->email)->send(new ReceiptsEmail($req->message,$req->subject,$req->full_name));
                                
                                
        session()->flash('status',"Thank You for reaching us we will get back to you shortly");
       
    
     return redirect()->route('contact');
     
    }
}
