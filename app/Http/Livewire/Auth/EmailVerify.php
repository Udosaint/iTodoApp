<?php

namespace App\Http\Livewire\Auth;

use App\Models\Otp;
use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;


class EmailVerify extends Component
{

    public $otp_error = null;
    public $digit1;
    public $digit2;
    public $digit3;
    public $digit4;
    public $digit5;
    public $digit6;


    public function mount(Request $request)
    {
        //dd($request->user());

    }


    public function verifyOtp()
    {
        $otp = $this->digit1 . $this->digit2 . $this->digit3 . $this->digit4 . $this->digit5 . $this->digit6;


        $user = User::where('email', session('user'))->first();

        $checkotp = Otp::where('otp_code', $otp)
            ->where('user_id', $user->id)
            ->first();

        if ($checkotp) {

            // update the user status
            $user->update(['verify' => 1]);

            return to_route('email.confirm');
        }

        $this->reset();
        $this->otp_error = "Invalid OTP Code";
        //return session()->flash('error', 'Invalid Otp code');
    }


    public function render()
    {
        return view('livewire.auth.email-verify');
    }
}
