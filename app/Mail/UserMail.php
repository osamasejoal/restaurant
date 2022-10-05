<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserMail extends Mailable
{
    use Queueable, SerializesModels;




    /*
    |--------------------------------------------------------------------------
    |                              CONSTRUCT METHOD
    |--------------------------------------------------------------------------
    */
    public $u_pass   = "";
    public $u_name   = "";
    public $u_email  = "";
    public $u_role   = "";
    public function __construct($user_pass, $user_name, $user_email, $user_role)
    {
        $this->u_pass    = $user_pass;
        $this->u_name    = $user_name;
        $this->u_email   = $user_email;
        $this->u_role    = $user_role;
    }




    /*
    |--------------------------------------------------------------------------
    |                              BUILD METHOD
    |--------------------------------------------------------------------------
    */
    public function build()
    {
        return $this->view('backend.mail.user-mail', [
            'u_pass'    => $this->u_pass,
            'u_name'    => $this->u_name,
            'u_email'   => $this->u_email,
            'u_role'    => $this->u_role,
        ]);
    }
}
