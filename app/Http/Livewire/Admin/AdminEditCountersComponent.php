<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminEditCountersComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-edit-counters-component')->layout('layouts.backend');
    }
}
