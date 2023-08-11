<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Cache\Store;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;

class Settings extends Component
{
    use WithFileUploads;

    public $firstname;
    public $lastname;
    public $email;
    public $profession;
    public $phone;
    public $bio;


    public $photo;

    public $user;

    public $password;
    public $password_confirmation;

    public function mount($user)
    {
        $this->firstname = $user->firstname;
        $this->lastname = $user->lastname;
        $this->email = $user->email;
        $this->profession = $user->profession;
        $this->phone = $user->phone;
        $this->bio = $user->bio;
    }

    protected $rules = [];
    public function updateprofile()
    {
        $validated = $this->validate([
            'firstname' => 'string|required|min:3',
            'lastname' => 'string|required|min:3',
            'profession' => 'string|required|min:4',
            'phone' => 'numeric|required|min_digits:10,',
            'bio' => 'string|required|min:6'
        ]);

        $this->user->update($validated);

        session()->flash('message', 'Profile updated successful');
        return view('livewire.settings');
    }


    public function uploadPhoto()
    {
        $this->validate([
            'photo' => 'image|max:2048', // 2MB Max
        ]);





        $this->photo->store('photos', 'public');
        $this->user->update(['photo' => $this->photo->store('photos', 'public')]);


        session()->flash('message', 'Photo updated successful');
        return view('livewire.settings');
    }

    public function changePassword()
    {
        $validated = $this->validate([
            'password' => 'string|confirmed|required|min:6',
            'password_confirmation' => 'string|required|min:6',
        ]);

        $this->user->update([
            'password' => Hash::make($this->password)
        ]);

        Auth::login($this->user);
        session()->flash('message', 'Password changed successful');
        return view('livewire.settings');
    }
    public function render()
    {
        return view('livewire.settings');
    }
}
