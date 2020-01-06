<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\User;
class RegisterEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $link;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        //
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->link = getenv('APP_URL').'/activate?code='.$this->user->code_activation;
        return $this->subject('Confirmación de cuenta')
            ->view('emails.register.success');
    }
}
