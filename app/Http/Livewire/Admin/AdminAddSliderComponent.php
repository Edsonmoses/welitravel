<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Sliders;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\SliderSetting;
use Livewire\WithFileUploads;

class AdminAddSliderComponent extends Component
{
    use WithFileUploads;

    public $image;
    public $title;
    public $subtitle;
    public $slug;
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

    public function generateSlug()
    {
        $placeObj = new Sliders();

        $string = preg_replace('/[^A-Za-z0-9\-]/', '-', $this->title . '-' . $this->subtitle); //Removed all Special Character and replace with hyphen
        $final_slug = preg_replace('/-+/', '-', $string); //Removed double hyphen
        $sliderNameURL = strtolower($final_slug);
        $this->slug = Str::slug($sliderNameURL);
        //Check if this Slug already exists 
        $checkSlug = $placeObj->whereSlug($sliderNameURL)->exists();
        if ($checkSlug) {
            //Slug already exists.
            //Add numerical prefix at the end. Starting with 1
            $numericalPrefix = 1;
            while (1) {
                //Check if Slug with final prefix exists.
                $newSlug = $sliderNameURL . "-" . $numericalPrefix++; //new Slug with incremented Slug Numerical Prefix
                $newSlug = Str::slug($newSlug); //String Slug
                $checkSlug = $placeObj->whereSlug($newSlug)->exists(); //Check if already exists in DB
                //This returns true if exists.
                if (!$checkSlug) {
                    //There is not more coincidence. Finally found unique slug.
                    $this->slug = $newSlug; //New Slug 
                    break; //Break Loop
                }
            }
        } else {
            //Slug do not exists. Just use the selected Slug.
            $this->slug = $sliderNameURL;
        }
    }

    public function addSliders()
    {
        $slider = new Sliders();
        $slider->title = $this->title;
        $slider->subtitle = $this->subtitle;
        $slider->Starting = $this->Starting;
        $slider->price = $this->price;
        $slider->per = $this->per;
        $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('pic/slider/main', $imageName);
        $slider->image = $imageName;
        $imgName = Carbon::now()->timestamp . '.' . $this->infoImage->extension();
        $this->infoImage->storeAs('pic', $imgName);
        $slider->infoImage = $imgName;
        $infName = Carbon::now()->timestamp . '.' . $this->infoImage2->extension();
        $this->infoImage2->storeAs('pic', $infName);
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
        session()->flash('message', 'Slider has been created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-slider-component')->layout('layouts.backend');
    }
}
