<?php

namespace App\Http\Livewire;

use App\Models\Sliders;
use App\Models\SliderSetting;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $sliders = Sliders::where('sliderType','SLIDER')->orderBy('id','ASC')->paginate(10);
        $b_sliders = Sliders::where('sliderType','SLIDER')->orderBy('id','ASC')->take(4)->get();
        $headersetting = SliderSetting::where('status','active')->orderBy('id','ASC')->paginate(10);
        return view('livewire.home-component',['sliders'=>$sliders,'b_sliders'=>$b_sliders,'headersetting'=>$headersetting])->layout('layouts.base');
    }
}
