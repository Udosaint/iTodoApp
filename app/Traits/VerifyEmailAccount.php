<?php


namespace App\Traits;

use App\Mail\ResetPasswordOtp;
use App\Mail\SendverificationCode;
use App\Models\Otp;
use Illuminate\Support\Facades\Mail;

trait VerifyEmailAccount
{
    public function sendAccountOtp($user)
    {
        $otp = rand(100000, 999999);

        //dd(['email' => $user->email, 'id' => $user->id, 'otp' => $otp]);

        Otp::create([
            'otp_code' => $otp,
            'user_id' => $user->id
        ]);

        // send mail to the user email
        Mail::to($user->email)->send(new SendverificationCode($otp));

        //return ;
    }


    public function forgetPasswordOtp($user)
    {
        $otp = rand(100000, 999999);

        //dd(['email' => $user->email, 'id' => $user->id, 'otp' => $otp]);

        Otp::create([
            'otp_code' => $otp,
            'user_id' => $user->id
        ]);

        // send mail to the user email
        Mail::to($user->email)->send(new ResetPasswordOtp($otp));

        //return ;
    }
}
