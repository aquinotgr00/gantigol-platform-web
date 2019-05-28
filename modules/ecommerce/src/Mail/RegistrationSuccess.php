<?php

namespace Modules\Ecommerce\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;

class RegistrationSuccess extends Mailable
{
    use Queueable, SerializesModels;
    
    protected $customer;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user->load('customerProfile');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name = $this->user->name;
        $email = $this->user->email;
        $token_url = url('/verify/'.$this->user->token_verification);
        return $this->view('ecommerce::emails.register-success', compact('name', 'email', 'token_url'));
    }
}
