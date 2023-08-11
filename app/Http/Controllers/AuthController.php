<?php

namespace App\Http\Controllers;

use App\Models\Otp;
use App\Models\User;
use App\Traits\VerifyEmailAccount;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    use VerifyEmailAccount;
    // USER LOGIN FUNCTIONS

    function login()
    {
        return view('auth.login');
    }

    function authenticate()
    {
        return redirect()->route('user.dashboard');
    }

    // USER LOGIN FUNCTIONS ENDS 


    // USER REGISTERATION 

    function register()
    {
        return view('auth.register');
    }


    function store()
    {
    }


    // show forget password view
    function forgetPassword()
    {
        return view('auth.forget-password');
    }

    // check the email if exist and alert
    function forgetPasswordStore(Request $request)
    {
        $form = $request->validate([
            'email' => ['required', 'string', 'email']
        ]);

        $email = $request->input('email');
        $emailExist = User::where('email', $email)->first();

        if ($emailExist) {

            // generate the OTP and send it to user mail
            $this->forgetPasswordOtp($emailExist);
            $request->session()->put('email', $email);

            return to_route('reset.password')->with('message', 'Otp send to the email addres');
        }

        return to_route('forget.password')->withErrors(['email' => 'The email is not found']);

        //return redirect()->route('reset.password');
    }

    // change the user password
    function resetPassword()
    {
        return view('auth.reset-password');
    }

    function resetPasswordStore(Request $request)
    {
        $form = $request->validate([
            'otp' => ['required', 'numeric', 'min_digits:6'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'password_confirmation' => 'required|min:6'
        ]);


        $code = $request->input('otp');
        $password = $request->input('password');

        $user = User::where('email', session('email'))->first();



        $otp = Otp::where('otp_code', $code)
            ->where('user_id', $user->id)
            ->first();

        if ($otp) {
            $user->update(['password' => $password]);
            return redirect()->route('reset.confirm')->with('message', 'Password reset successful');
        }

        return redirect()->route('reset.password')->withErrors(['otp' => 'The OTP is invalid']);;
    }

    function resetConfirm()
    {
        return view('auth.reset-confirm');
    }




    // Email Verify 

    function verifyEmail()
    {
        return view('auth.email-verify');
    }

    function verifyOtp()
    {
        return redirect()->route('email.confirm');
    }

    function confirmEmail()
    {
        return view('auth.email-confirm');
    }
}
