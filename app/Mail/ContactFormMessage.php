<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        return $this->from([
                'address' => env('MAIL_FROM_ADDRESS'),
                'full_name' => env('MAIL_FROM_NAME')
            ])
            ->to(env('APP_ADMIN_CONTACT'))
            ->cc($request->email)
            ->subject($request->subject)
            ->view('emails.contactForm')
            ->with([
                'contactName' => $request->full_name,
                'contactSubject' => $request->subject,
                'contactEmail' => $request->email,
                'contactMessage' => $request->message
            ]);
    }
}
