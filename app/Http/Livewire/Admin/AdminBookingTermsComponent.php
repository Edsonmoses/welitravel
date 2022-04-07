<?php

namespace App\Http\Livewire\Admin;

use App\Models\BookingTerms;
use Livewire\Component;

class AdminBookingTermsComponent extends Component
{
    public function render()
    {
        $bookingterms = BookingTerms::all();
        return view('livewire.admin.admin-booking-terms-component',['bookingterms'=>$bookingterms])->layout('layouts.backend');
    }
}
