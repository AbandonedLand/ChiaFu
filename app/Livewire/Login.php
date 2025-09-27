<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Title;
class Login extends Component
{

    public $username;
    public $password;
    public function render()
    {
        return view('livewire.login');
    }
    #[Title('Login')]
    public function login(Request $request)
    {
        $this->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt(['username' => $this->username, 'password' =>$this->password])){
            $request->session()->regenerate();
            return redirect()->intended('/profile');
        } else {
            Session::flash('error','Could not log you in');
        }
    }

}
