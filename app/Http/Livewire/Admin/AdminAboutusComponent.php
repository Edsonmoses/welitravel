<?php

namespace App\Http\Livewire\Admin;

use App\Models\Aboutus;
use Livewire\Component;

class AdminAboutusComponent extends Component
{
    public function render()
    {
        $aboutus = Aboutus::all();
        return view('livewire.admin.admin-aboutus-component',['aboutus'=>$aboutus])->layout('layouts.backend');
    }
}
