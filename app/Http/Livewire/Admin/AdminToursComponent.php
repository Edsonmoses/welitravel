<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tour;
use Livewire\Component;

class AdminToursComponent extends Component
{
    public function render()
    {
        $tours = Tour::all();
        return view('livewire.admin.admin-tours-component',['tours'=>$tours])->layout('layouts.backend');
    }
}
