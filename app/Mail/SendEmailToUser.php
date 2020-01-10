<?php

namespace App\Mail;

use App\User;
use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class SendEmailToUser extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * User variable
     *
     * @var User
     */
    private $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        try {
            return $this->markdown('emailTemplate.user.welcome')->to($this->user->email);
        } catch (Exception $exception) {
            Log::error("Error while sending mail to user with id ". $this->user->id. ", with error ". $exception->getMessage());
        }
    }
}
