<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMessage;

use App\Models\Contact;

use App\Rules\NoHtml;
use App\Rules\GoogleRecaptcha;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function createForm(Request $request)
    {
        return view('layouts.pages.contact');
    }

    public function contactForm(Request $request)
    {

        //Form validation
        $this->validate($request, [
            'full_name' => ['required', new NoHtml],
            'email' => ['required', 'email', new NoHtml],
            'phone' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/','min:10', new NoHtml],
            'subject' => ['required', new NoHtml],
            'message' => ['required', new NoHtml],
            'g-recaptcha-response' => ['required', new GoogleRecaptcha]
        ]);

        //Store data
        Contact::create($request->all());
        Mail::send(new ContactFormMessage());


        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}
