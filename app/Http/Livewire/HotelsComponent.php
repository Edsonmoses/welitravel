<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HotelsComponent extends Component
{
    public function render()
    {
        return view('livewire.hotels-component')->layout('layouts.base');
    }
}
