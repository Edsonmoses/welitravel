<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WallpaperComponent extends Component
{
    public function render()
    {
        return view('livewire.wallpaper-component')->layout('layouts.base');
    }
}
