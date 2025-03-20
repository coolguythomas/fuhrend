<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function newsletterSave(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'email' => "required|email|indisposable",
            ],
            [
                "email.required" => "Email address must be provided.",
                "email.email" => "Email address are accepted only.",
                "email.indisposable" => "It appears that the email address is either invalid or does not exist.",
            ]
        );
        if ($validator->fails()) {
            session()->flash('errors', $validator->errors()->first());
            return back();
        }
        try {
            $newsletter = Newsletter::where("email", $request->input('email'))->first();
            if ($newsletter) {
                session()->flash('errors', 'Email address already subscribed to the newsletter.');
                return back();
            }
            $newsletter = new Newsletter();
            $newsletter->email = $request->input('email');
            $newsletter->save();
            session()->flash('success', "Subscribed to the newsletter successfully.");
            return back();
        } catch (\Throwable $th) {
            logger($th);
            session()->flash('errors', "Something went wrong.");
            return back();
        }
    }
    public function contactSave(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => "required|regex:/^[a-zA-Z0-9 ]+$/",
                'email' => "required|email|indisposable",
                'subject' => "required|string",
                'message' => "required|string",
                'phone' => "required|string",
            ],
            [
                "name.required" => "Your name must be provided.",
                "name.regex" => "Your name should only have letters and numbers.",
                "email.required" => "Email address must be provided.",
                "email.email" => "Email address are accepted only.",
                "email.indisposable" => "It appears that the email address is either invalid or does not exist.",
                "phone.required" => "Email address must be provided.",
                "message.required" => "Email address must be provided.",
                "subject.required" => "Email address must be provided.",
            ]
        );
        if ($validator->fails()) {
            session()->flash('errors', $validator->errors()->first());
            return back();
        }
        try {
            $contact = new Contact();
            $contact->name = $request->input('name');
            $contact->email = $request->input('email');
            $contact->phone = $request->input('phone');
            $contact->subject = $request->input('subject');
            $contact->message = $request->input('message');
            $contact->save();
            session()->flash('success', "Message saved successfully.");
            return back();
        } catch (\Throwable $th) {
            logger($th);
            session()->flash('errors', "Something went wrong.");
            return back();
        }
    }
}
