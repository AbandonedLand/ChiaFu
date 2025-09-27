<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Profile extends Component
{
    public $username;
    #[Locked]
    public $xch_address;

    public function mount(){
        $user = Auth::user();
        $this->xch_address = $user->xch_address;
        $this->username = $user->username;
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
