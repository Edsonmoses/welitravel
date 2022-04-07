<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminEditHotelBookingsComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-edit-hotel-bookings-component')->layout('layouts.backend');
    }
}
