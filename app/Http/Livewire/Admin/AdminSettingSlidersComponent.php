<?php

namespace App\Http\Livewire\Admin;

use App\Models\SliderSetting;
use Livewire\Component;

class AdminSettingSlidersComponent extends Component
{
    public $name;
    public $status;

    public function mount()
    {
        $this->status = 'active';
    }
    public function deactivate($id)
    {
        $slider = SliderSetting::find($id);
        $slider->status = 'inactive';
        $slider->save();
        session()->flash('message', 'Slider has been Deactivated successfully!');
    }
    public function updateSetting($id)
    {
        $slider = SliderSetting::find($id);
        $slider->status = $this->status;
        $slider->save();
        session()->flash('message', 'Slider has been Actived successfully!');
    }

    public function render()
    {
        $settings = SliderSetting::all();
        return view('livewire.admin.admin-setting-sliders-component', ['settings' => $settings])->layout('layouts.backend');
    }
}
