<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    public function index() {
        return view('contact-us');
    }

    public function submitForm(Request $request) {
        if($request->isMethod('post')) {
            $data = $request->all();
        
            $rules = [
                "name" => "required|string|max:100",
                "email" => "required|email|max:150",
                "subject" => "required",
                "message" => "required",
            ];

            $customMessages = [
                'name.required' => 'Name is required',
                'email.required' => 'Email is required',
                'email.email' => 'Valid Email is required',
                'subject.required' => 'Subject is required',
                'message.required' => 'Message is required',
            ];

            $validator = Validator::make($data,$rules,$customMessages);
            if($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $email = "psuaccmarketplace@gmail.com";
            $messageData = [
                'name' => $data['name'],
                'email' => $data['email'],
                'subject' => $data['subject'],
                'comment' => $data['message'],                
            ];

            Mail::send('emails.contact',$messageData,function($message)use($email) {
                $message->to($email)->subject("Enquiry from PSU Marketplace");
            });

            $message = "Thank for your query. We will get back to you soon.";
            return redirect()->back()->with('success_message',$message);
        }   
    }
}
