<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    public $password; // public property for blade

    // 1️⃣ Constructor me password accept karo
    public function __construct($password)
    {
        $this->password = $password;
    }

    // 2️⃣ Build method me view aur subject define karo
    public function build()
    {
        return $this->subject('Your Account Temporary Password')
            ->view('emails.password') // create this view
            ->with([
                'password' => $this->password
            ]);
    }
}