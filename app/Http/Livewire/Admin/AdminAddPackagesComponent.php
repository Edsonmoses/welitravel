<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminAddPackagesComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-add-packages-component')->layout('layouts.backend');
    }
}
