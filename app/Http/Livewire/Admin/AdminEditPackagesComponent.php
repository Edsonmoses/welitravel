<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminEditPackagesComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-edit-packages-component')->layout('layouts.backend');
    }
}
