<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailTicket extends Mailable
{
    use Queueable, SerializesModels;
    public $mailData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData)
    {
        //
        $this->mailData = $mailData;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('Email.ticketEmail')
                    ->from($address = 'admin@taxpros911.com', $name = 'Tax Pros 911 & Bookkeeping Services')
                    ->subject('Tax Pros 911 & Bookkeeping Services')
                    ->with([
                        'data' => $this->mailData
                    ]);
    }
}
