<?php

namespace App\Http\Livewire\Admin;

use App\Models\Sliders;
use App\Models\SliderSetting;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddSliderComponent extends Component
{
   use WithFileUploads;

   public $image;
   public $title;
   public $subtitle;
   public $Starting;
   public $price;
   public $per;
   public $infoImage;
   public $infoImage2;
   public $infoprice;
   public $infotemp;
   public $tempInfo;
   public $infoText;
   public $maintitle; 
   public $spantitle;
   public $mainprice;
   public $mainper;
   public $mainpUrl;
   public $sliderType;

   public function addSliders()
   {
       $slider = new Sliders();
       $slider->title = $this->title;
       $slider->subtitle = $this->subtitle;
       $slider->Starting = $this->Starting;
       $slider->price = $this->price;
       $slider->per = $this->per;
       $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
       $this->image->storeAs('assets/frontend/pic/slider/main',$imageName);
       $slider->image = $imageName;
       $imgName = Carbon::now()->timestamp.'.'.$this->infoImage->extension();
       $this->infoImage->storeAs('assets/frontend/pic',$imgName);
       $slider->infoImage = $imgName;
       $infName = Carbon::now()->timestamp.'.'.$this->infoImage2->extension();
       $this->infoImage2->storeAs('assets/frontend/pic',$infName);
       $slider->infoImage2 = $infName;
       $slider->infoprice = $this->infoprice;
       $slider->infotemp = $this->infotemp;
       $slider->tempInfo = $this->tempInfo;
       $slider->infoText = $this->infoText;
       $slider->maintitle = $this->maintitle;
       $slider->spantitle = $this->spantitle;
       $slider->mainprice = $this->mainprice;
       $slider->mainper = $this->mainper;
       $slider->mainpUrl = $this->mainpUrl;
       $slider->sliderType = $this->sliderType;
       $slider->save();
       session()->flash('message','Slider has been created successfully!');
   }

    public function render()
    {
        return view('livewire.admin.admin-add-slider-component')->layout('layouts.backend');
    }
}
