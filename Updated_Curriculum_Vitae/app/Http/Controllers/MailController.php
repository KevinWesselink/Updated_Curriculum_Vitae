<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Mail\RegisterMail;
use Illuminate\Http\Request;
use App\Mail\RequestAccessMail;
use App\Mail\ResetPasswordMail;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;

class MailController extends Controller
{
    public function index()
    {
        Mail::to('your_test_mail@gmail.com')->send(new TestMail([
            'title' => 'Titel van deze mail',
            'body' => 'Dit is de body van de mail',
        ]));

        return redirect()->back();
    }

    public function registerMail($email)
    {
        Mail::to($email)->send(new RegisterMail([
            'title' => 'register_mail_title',
        ]));
    }

    public function requestAccessMail($user)
    {
        $manageUrl = route('manageProfileAccess', ['user' => $user->id]);

        Mail::to($user->email)->send(new RequestAccessMail([
            'title' => 'request_access_mail_title',
            'manageUrl' => $manageUrl,
        ]));
    }

    public function resetPasswordMail($user)
    {
        $token = Password::createToken($user);
        $resetUrl = URL::route('resetPassword', [
            'token' => $token,
            'email' => urlencode($user->email)
        ]);
        
        Mail::to($user->email)->send(new ResetPasswordMail([
            'title' => 'reset_password_mail_title',
            'resetUrl' => $resetUrl,
        ]));
    }
}
