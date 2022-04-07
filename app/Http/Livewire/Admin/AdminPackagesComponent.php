<?php

namespace App\Http\Livewire\Admin;

use App\Models\Packages;
use Livewire\Component;

class AdminPackagesComponent extends Component
{
    public function render()
    {
        $packages = Packages::all();
        return view('livewire.admin.admin-packages-component',['packages'=>$packages])->layout('layouts.backend');
    }
}
