<?php

namespace App\Services;

use App\Jobs\SendEmailJob;

class MailService
{
    /**
     * MailService constructor.
     *
     */
    public function __construct()
    {

    }

    /**
     * Send Email function
     *
     * @return void
     */
    public function sendEmail(): void
    {
        SendEmailJob::dispatch();
    }
}
