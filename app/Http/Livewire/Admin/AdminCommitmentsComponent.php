<?php

namespace App\Http\Livewire\Admin;

use App\Models\Commitment;
use Livewire\Component;

class AdminCommitmentsComponent extends Component
{
    public function render()
    {
        $commitments = Commitment::all();
        return view('livewire.admin.admin-commitments-component',['commitments'=>$commitments])->layout('layouts.backend');
    }
}
