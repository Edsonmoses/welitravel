<?php

namespace App\Http\Livewire\Admin;

use App\Models\Testimonils;
use Livewire\Component;

class AdminTestimonilsComponent extends Component
{
    public function render()
    {
        $testimonils = Testimonils::all();
        return view('livewire.admin.admin-testimonils-component',['testimonils'=>$testimonils])->layout('layouts.backend');
    }
}
