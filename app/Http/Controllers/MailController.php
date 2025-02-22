<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Mail\DemoMail;
use App\Mail\FormMail;
use App\Mail\GeneralMail;
class MailController extends Controller
{
    function sendEmail(Request $request)
    {
        $to = "priyavignesh1412@gmail.com";
        $msg = $request->message;
        $subject = $request->subject;
        Mail::to($to)->send(new ContactFormMail($msg, $subject));
        //Mail::to('priyavignesh1412@gmail.com')->send(new ContactFormMail(($msg, $subject)));
        return "send email";
    }
    public function index()
    {
        $mailData = [
            'title' => 'Mail from Website',
            'body' => 'This is for testing'
        ];
        Mail::to('priyavignesh1412@gmail.com')->send(new DemoMail(($mailData)));
        return redirect()->back()->with('success', 'Your enquiry has been submitted to the corresponding team.');

    }

    function form_index(Request $request)
    {
        $to = "priyavignesh1412@gmail.com";
        $name = $request->name;
        $email = $request->email;
        $phone_number = $request->phone_number;
        $klass = $request -> klass;
        Mail::to($to)->send(new FormMail($name, $email, $phone_number, $klass));
        #dd('Email Sent Successfully');
        return redirect()->back()->with('success', 'Your enquiry has been submitted to the corresponding team.');

        /*$data = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'klass' => 'required',
            'phone_number' => 'required|max:10',
        ]);
        Mail::to($to)->send(new FormMail($name, $email, $phone_number, $klass));

        dd('ok');*/


    }
    function general_index(Request $request)
    {
        $to = "priyavignesh1412@gmail.com";
        $name = $request->name;
        $phone_number = $request->phone_number;
        $email = $request->email;
        $message_content = $request -> message_content;
        Mail::to($to)->send(new GeneralMail($name, $phone_number, $email, $message_content));
        #dd('Email Sent Successfully');
        return redirect()->back()->with('success', 'Your enquiry has been submitted to the corresponding team.');
    }
}
