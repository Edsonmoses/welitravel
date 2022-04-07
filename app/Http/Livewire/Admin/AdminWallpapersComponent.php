<?php

namespace App\Http\Livewire\Admin;

use App\Models\Wallpaper;
use Livewire\Component;

class AdminWallpapersComponent extends Component
{
    public function render()
    {
        $wallpapers = Wallpaper::all();
        return view('livewire.admin.admin-wallpapers-component',['wallpapers'=>$wallpapers])->layout('layouts.backend');
    }
}
