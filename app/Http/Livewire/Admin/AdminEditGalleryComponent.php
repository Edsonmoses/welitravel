<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminEditGalleryComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-edit-gallery-component')->layout('layouts.backend');
    }
}
