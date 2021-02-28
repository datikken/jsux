<?php

namespace App\Http\Controllers;
use App\Mail\SendDemoMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendDemoMail()
    {
        $email = 'positronx@gmail.com';

        $maildata = [
            'title' => 'Markdown email for you bro',
            'url' => 'tikken23@gmail.com'
        ];

        Mail::to($email)->send(new SendDemoMail($maildata));

        dd("Mail has been sent successfully");
    }
}
