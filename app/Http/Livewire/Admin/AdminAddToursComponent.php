<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tour;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddToursComponent extends Component
{
    use WithFileUploads;

    public $image;
    public $image_2;
    public $features_priceInfo;
    public $features_price;
    public $features_tempInfo;
    public $features_temp;
    public $features_text;
    public $features_title;
    public $features_subtitle;
    public $features_url;

    public function addTours()
    {
        $tour = new Tour();

        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('assets/frontend/pic/Testimony/main',$imageName);
        $tour->image = $imageName;

        $testiName = Carbon::now()->timestamp.'.'.$this->image_2->extension();
        $this->image_2->storeAs('assets/frontend/pic/tour/main',$testiName);
        $tour->image_2 = $testiName;

        $tour->features_priceInfo = $this->features_priceInfo;
        $tour->features_price = $this->features_price;
        $tour->features_tempInfo = $this->features_tempInfo;
        $tour->features_temp = $this->features_temp;
        $tour->features_text = $this->features_text;
        $tour->features_title = $this->features_title;
        $tour->features_subtitle = $this->features_subtitle;
        $tour->features_url = $this->features_url;
        $tour->save();
        session()->flash('message','Tour has been created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-tours-component')->layout('layouts.backend');
    }
}
