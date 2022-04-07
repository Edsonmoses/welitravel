<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class SliderSettingComponent extends Component
{
    public function updateSetting()
    {
    }
    public function render()
    {
        return view('livewire.admin.slider-setting-component')->layout('layouts.backend');
    }
}
