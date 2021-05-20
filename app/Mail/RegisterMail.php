<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\user;

class RegisterMail extends Mailable
{
    use Queueable, SerializesModels;

    public $login_table;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($login_table)
    {
        $this->login_table=$login_table;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('REGISTRATION SUCCESS -Anns College')->view('emails.RegisterMail');
    }
}
