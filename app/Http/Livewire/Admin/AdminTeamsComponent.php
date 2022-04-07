<?php

namespace App\Http\Livewire\Admin;

use App\Models\Team;
use Livewire\Component;

class AdminTeamsComponent extends Component
{
    public function render()
    {
        $teams =Team::all();
        return view('livewire.admin.admin-teams-component',['teams'=>$teams])->layout('layouts.backend');
    }
}
