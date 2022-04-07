<?php

namespace App\Http\Livewire;

use App\Models\Sliders;
use Livewire\Component;

class HeadersComponent extends Component
{

    public function render()
    {
        $sliders = Sliders::where('sliderType','SLIDER')->orderBy('id','ASC')->paginate(10);
        return view('livewire.headers-component',['sliders'=>$sliders]);
    }
}
