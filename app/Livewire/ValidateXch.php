<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ValidateXch extends Component
{

    public $offer;

    public function render()
    {
        return view('livewire.validate-xch');
    }

    function viewoffer(){
        $response = Http::post(env('SAGE_ENDPOINT').'/offer_status',['offer'=>$this->offer]);
        if(
            $response->json() &&
            count($response->json())==2 &&
            $response->json()['status']=='active' &&
            count($response->json()['offer']['taker'])==0 &&
            $response->json()['offer']['maker'][0]

            )
        dd($response->json());
    }
}
