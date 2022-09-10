<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;
use Notification;
use App\Notifications\SendEmailNotification;

class ContactController extends Controller
{
    public function index(){
        $categories = Category::with('subcategories','products')->has('products')->get();
        return view('contact.index')->with(compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:11|numeric',
            'subject' => 'required',
            'message' => 'required'
        ]);
  
        Contact::create($request->all());
  
        return redirect()->back()->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }

    // public function send_user_email(Request $request){
        
    //     $details = [
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'phone' => $request->phone,
    //         'subject' => $request->subject,
    //         'message' => $request->message
    //     ];
    //     Notification::send('', new SendMailNotification($details));
    //     return redirect()->back('message','Mail Sent Successfully');
    // }
}
