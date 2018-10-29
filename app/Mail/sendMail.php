<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendMail extends Mailable
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
    public function build()
    {

        return $this->subject(Lang::getFromJson('Encabezado mensaje'))
//                    ->withSwiftMessage(function ($message) {
//                        $message->getHeaders()
//                                ->addTextHeader('Custom-Header', 'HeaderValue');})
                    ->view('view.mail.mail');
    }
}
