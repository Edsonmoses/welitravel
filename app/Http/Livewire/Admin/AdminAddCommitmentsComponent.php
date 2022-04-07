<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminAddCommitmentsComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-add-commitments-component')->layout('layouts.backend');
    }
}
