<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Title;

use Livewire\Component;

class Register extends Component
{
    public $username;
    public $password;
    public $password_confirmation;
    public $xch_address;


    public function register(){
        $this->validate([
                'username' => 'required|alpha_dash|max:20|unique:users,username',
#                'xch_address' => 'required|size:62|unique:users,xch_address|starts_with:xch1',
                'password' => 'required|confirmed',
            ]
        );
        $user = new User();
        $user->username = $this->username;
        $user->password = Hash::make($this->password);
 #       $user->xch_address = $this->xch_address;
        $user->save();
        Session::flash('success', 'Account created successfully');
        return $this->redirect('/profile',true);



    }
    public function render()
    {
        return view('livewire.register');
    }
}
