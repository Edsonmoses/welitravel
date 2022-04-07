<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HotelBookingsComponent extends Component
{
    public function render()
    {
        return view('livewire.hotel-bookings-component')->layout('layouts.base');
    }
}
