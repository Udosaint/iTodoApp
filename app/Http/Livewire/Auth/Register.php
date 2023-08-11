<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{

    public $email;
    public $password;
    public $password_confirmation;

    public function rules()
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'min:8'],
            'password_confirmation' => 'required|min:7',
        ];
    }


    public function updated($fields)
    {
        $this->validateOnly($fields);
    }


    public function CreateAccount()

    {

        $validated = $this->validate([
            'email' => ['required', 'string', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8'],
        ]);


        User::create($validated);

        $this->email = '';
        $this->password = '';
        $this->password_confirmation = '';

        //session()->flash('message', 'Account created successful');
        return redirect()->route('login')->with('message', 'Account created successful');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
