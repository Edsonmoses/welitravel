<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Sliders;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminEditSliderComponent extends Component
{
    use WithFileUploads;

    public $image, $newimage, $title, $subtitle, $Starting, $price, $per, $infoImage, $newinfoImage,
        $infoImage2, $newinfoImage2, $infoprice, $infotemp, $tempInfo, $infoText, $maintitle, $spantitle,
        $mainprice, $mainper, $mainpUrl, $sliderType, $slider_id;

    public function mount($slug)
    {
        $slider = Sliders::where('subtitle', $slug)->first();
        $this->title = $slider->title;
        $this->subtitle = $slider->subtitle;
        $this->Starting = $slider->Starting;
        $this->image = $slider->image;
        $this->price = $slider->price;
        $this->per = $slider->per;
        $this->infoImage = $slider->infoImage;
        $this->infoImage2 = $slider->infoImage2;
        $this->infoprice = $slider->infoprice;
        $this->infotemp = $slider->infotemp;
        $this->tempInfo = $slider->tempInfo;
        $this->infoText = $slider->infoText;
        $this->maintitle = $slider->maintitle;
        $this->spantitle = $slider->spantitle;
        $this->mainprice = $slider->mainprice;
        $this->mainper = $slider->mainper;
        $this->mainpUrl = $slider->mainpUrl;
        $this->sliderType = $slider->sliderType;
        $this->slider_id = $slider->id;
    }

    public function generateSlug()
    {
        $placeObj = new Sliders();

        $string = preg_replace('/[^A-Za-z0-9\-]/', '-', $this->name); //Removed all Special Character and replace with hyphen
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

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function storeSliders()
    {

        $slider = Sliders::find($this->slider_id);
        $slider->title = $this->title;
        $slider->subtitle = $this->subtitle;
        $slider->Starting = $this->Starting;
        $slider->price = $this->price;
        $slider->per = $this->per;
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
        if ($this->newimage) {
            if (file_exists('assets/frontend/pic/slider/main' . '/' . $slider->image)) {
                if (!empty(file_exists('assets/frontend/pic/slider/main' . '/' . $slider->image))) {
                    $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
                    $this->newimage->storeAs('pic/slider/main', $imageName);
                    $slider->image = $imageName;
                } else {
                    unlink('assets/frontend/pic/slider/main' . '/' . $slider->image);
                    $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
                    $this->newimage->storeAs('pic/slider/main', $imageName);
                    $slider->image = $imageName;
                }
            } else {
                $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
                $this->newimage->storeAs('pic/slider/main', $imageName);
                $slider->image = $imageName;
            }
        }
        if ($this->newinfoImage) {
            if (file_exists('assets/frontend/pic' . '/' . $slider->infoImage)) {
                if (!empty(file_exists('assets/user/images' . '/' . $slider->infoImage))) {
                    $imgName = Carbon::now()->timestamp . '.' . $this->newinfoImage->extension();
                    $this->newinfoImage->storeAs('pic', $imgName);
                    $slider->infoImage = $imgName;
                } else {
                    unlink('assets/frontend/pic' . '/' . $slider->infoImage);
                    $imgName = Carbon::now()->timestamp . '.' . $this->newinfoImage->extension();
                    $this->newinfoImage->storeAs('pic', $imgName);
                    $slider->infoImage = $imgName;
                }
            } else {
                $imgName = Carbon::now()->timestamp . '.' . $this->newinfoImage->extension();
                $this->newinfoImage->storeAs('pic', $imgName);
                $slider->infoImage = $imgName;
            }
        }
        if ($this->newinfoImage2) {
            if (file_exists('assets/frontend/pic' . '/' . $slider->infoImage2)) {
                if (!empty(file_exists('assets/frontend/pic' . '/' . $slider->infoImage2))) {
                    $infName = Carbon::now()->timestamp . '.' . $this->newinfoImage2->extension();
                    $this->newinfoImage2->storeAs('pic', $infName);
                    $slider->infoImage2 = $infName;
                } else {
                    unlink('assets/frontend/pic' . '/' . $slider->infoImage2);
                    $infName = Carbon::now()->timestamp . '.' . $this->newinfoImage2->extension();
                    $this->newinfoImage2->storeAs('pic', $infName);
                    $slider->infoImage2 = $infName;
                }
            } else {
                $infName = Carbon::now()->timestamp . '.' . $this->newinfoImage2->extension();
                $this->infoImnewinfoImage2age2->storeAs('pic', $infName);
                $slider->infoImage2 = $infName;
            }
        }

        $slider->save();
        session()->flash(
            'message',
            $this->slider_id ? 'sliders Updated Successfully.' : 'sliders Created Successfully.'
        );
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-slider-component')->layout('layouts.backend');
    }
}
