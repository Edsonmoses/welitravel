<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PackagesComponent extends Component
{
    public function render()
    {
        return view('livewire.packages-component')->layout('layouts.base');
    }
}
