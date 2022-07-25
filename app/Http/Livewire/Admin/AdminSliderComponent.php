<?php

namespace App\Http\Livewire\Admin;

use App\Models\Sliders;
use Livewire\Component;

class AdminSliderComponent extends Component
{
    public $sliders;
    public function delete($id)
    {
        Sliders::find($id)->delete();
        session()->flash('message', 'Slider Deleted Successfully.');
    }

    public function deactivate($id)
    {
        $slider = Sliders::find($id);
        $slider->status = 'inactive';
        $slider->save();
        session()->flash('message', 'Slider has been Deactivated successfully!');
    }
    public function updateslider($id)
    {
        $slider = Sliders::find($id);
        $slider->status = 'active';
        $slider->save();
        session()->flash('message', 'Slider has been Actived successfully!');
    }
    public function render()
    {
        $this->sliders = Sliders::orderBy('title')->get();
        return view('livewire.admin.admin-slider-component')->layout('layouts.backend');
    }
}
