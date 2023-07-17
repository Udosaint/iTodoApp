<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
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
    function forgetPasswordStore()
    {
        return redirect()->route('reset.password');
    }

    // change the user password
    function resetPassword()
    {
        return view('auth.reset-password');
    }

    function resetPasswordStore()
    {
        return redirect()->route('reset.confirm');
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
