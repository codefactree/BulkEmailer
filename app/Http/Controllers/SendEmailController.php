<?php

namespace App\Http\Controllers;

use App\Services\MailService;
use Illuminate\Http\RedirectResponse;

class SendEmailController extends Controller
{
    /**
     * MailService variable
     *
     * @var MailService
     */
    private $mailService;

    public function __construct(MailService $mailService) {
        $this->mailService = $mailService;
    }
    /**
     * Send Email To All User
     *
     * @return RedirectResponse
     */
    public function index(): RedirectResponse
    {
        $this->mailService->sendEmail();
        
        return redirect()->back();
    }
}
