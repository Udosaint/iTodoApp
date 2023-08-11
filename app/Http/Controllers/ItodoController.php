<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItodoController extends Controller
{
    //

    public function dashboard()
    {

        return view('user.dashboard');
    }

    public function inbox()
    {
        return view('user.inbox');
    }

    public function createTask()
    {
        return view('user.addtask');
    }

    public function storeTask()
    {
        return view('user.dashboard');
    }

    public function editTask()
    {
        return view('user.addtask');
    }

    public function today()
    {
        return view('user.today');
    }

    public function folder()
    {
        return view('user.folder');
    }

    public function folders()
    {
        return view('user.new-folder');
    }

    public function createfolder()
    {
        return view('user.new-folder');
    }

    public function storefolder()
    {
        return view('user.addtask');
    }
}
