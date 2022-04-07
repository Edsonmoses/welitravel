<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminEditTeamsComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-edit-teams-component')->layout('layouts.backend');
    }
}
