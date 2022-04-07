<?php

namespace App\Http\Livewire\Admin;

use App\Models\Facts;
use Livewire\Component;

class AdminFactsComponent extends Component
{
    public function render()
    {
        $facts = Facts::all();
        return view('livewire.admin.admin-facts-component',['facts'=>$facts])->layout('layouts.backend');
    }
}
