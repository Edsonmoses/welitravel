<?php

namespace App\Http\Livewire\Admin;

use App\Models\Services;
use Livewire\Component;

class AdminServicesComponent extends Component
{
    public function render()
    {
        $services = Services::all();
        return view('livewire.admin.admin-services-component',['services'=>$services])->layout('layouts.backend');
    }
}
