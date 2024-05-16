<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $username;
    /**
     * Create a new message instance.
     */
    public function __construct($username)
    {
        $this->username = $username;
    }

    public function build(){
        return $this->view('mail.mailtext')
        ->subject("New registered user");
    }
}
