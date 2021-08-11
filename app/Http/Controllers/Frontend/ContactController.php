<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\ContactUs;
use Mail;  
use \App\Mail\ContactUsMail;

class ContactController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('frontend.contact-us');
    }

    public function store(Request $request)
    {        
        // dd($request);     
   
        $contactus = new ContactUs;

        $contactus->name=$request->name;
        $contactus->phone=$request->phone;
        $contactus->email=$request->email;
        $contactus->message=$request->message;
        $contactus->status='Pending'; 

        $contactus->save();

        $details = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message
        ];

        \Mail::to(['rdcarchitects@hotmail.com','rdcarchitects@icloud.com','team@rdcarchitects.lk'])->send(new ContactUsMail($details));
        
        session()->flash('message','Thanks!');

        return back();    
    }





}
