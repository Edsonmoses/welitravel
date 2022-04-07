<?php

namespace App\Http\Livewire\Admin;

use App\Models\Counter;
use Livewire\Component;

class AdminCountersComponent extends Component
{
    public function render()
    {
        $counters = Counter::all();
        return view('livewire.admin.admin-counters-component',['counters'=>$counters])->layout('layouts.backend');
    }
}
