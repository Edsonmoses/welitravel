<?php

namespace App\Http\Livewire;

use App\Models\Sliders;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $sliders = Sliders::where('sliderType','SLIDER')->orderBy('id','ASC')->paginate(10);
        return view('livewire.home-component',['sliders'=>$sliders])->layout('layouts.base');
    }
}
