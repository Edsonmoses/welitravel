<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminEditFactsComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-edit-facts-component')->layout('layouts.backend');
    }
}
