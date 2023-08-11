<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class Login extends Component
{

    public $email;
    public $password;

    public function LoginAccount(Request $request)
    {
        $validated = $this->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'min:8'],
        ]);

        $emailexist = User::where('email', $this->email)->first();


        // check if the email exist
        if (!$emailexist) {

            session()->flash('error', 'Email does not exist');
        } else {

            // attempt to verify user login details
            if (auth()->attempt($validated)) {

                $request->session()->regenerate();
                session()->flash('message', 'User login successful');
                return redirect()->route('user.dashboard')->with('message', 'User login successful');
            } else {
                session()->flash('error', 'Email or Password is not valid');
            }
        }
    }



    public function render()
    {
        return view('livewire.auth.login');
    }
}
