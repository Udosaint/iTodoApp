<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    function profile()
    {
        return view('user.profile');
    }


    function settings()
    {
        return view('user.setting');
    }
}
