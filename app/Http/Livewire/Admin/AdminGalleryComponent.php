<?php

namespace App\Http\Livewire\Admin;

use App\Models\Gallery;
use Livewire\Component;

class AdminGalleryComponent extends Component
{
    public function render()
    {
        $galleries = Gallery::all();
        return view('livewire.admin.admin-gallery-component',['galleries'=>$galleries])->layout('layouts.backend');
    }
}
