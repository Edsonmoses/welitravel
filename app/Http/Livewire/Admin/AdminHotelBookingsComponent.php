<?php

namespace App\Http\Livewire\Admin;

use App\Models\HotelBooking;
use Livewire\Component;

class AdminHotelBookingsComponent extends Component
{
    public function render()
    {
        $hotelbookings = HotelBooking::all();
        return view('livewire.admin.admin-hotel-bookings-component',['hotelbookings'=>$hotelbookings])->layout('layouts.backend');
    }
}
