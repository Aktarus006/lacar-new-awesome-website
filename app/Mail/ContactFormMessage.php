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
                'address' => $request->email,
                'full_name' => $request->full_name
            ])
            ->to(env('APP_ADMIN_CONTACT'))
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
