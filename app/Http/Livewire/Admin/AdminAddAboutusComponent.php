<?php

namespace App\Http\Livewire\Admin;

use App\Models\Aboutus;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddAboutusComponent extends Component
{
    use WithFileUploads;

    public $bgCover;
    public $bgImage;
    public $top_title;
    public $left_title;
    public $right_title;
    public $body;
    public $video;
    public $image;
    public $sign;
    public $category_id;

    public function addAbout()
    {
        $aboutus = new Aboutus();
        $imageName = Carbon::now()->timestamp.'.'.$this->bgCover->extension();
        $this->bgCover->storeAs('pic/breadcrumbs',$imageName);
        $aboutus->bgCover = $imageName;
        $imgName = Carbon::now()->timestamp.'.'.$this->bgImage->extension();
        $this->bgImage->storeAs('pic',$imgName);
        $aboutus->bgImage = $imgName;
        $infName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('pic',$infName);
        $aboutus->image = $infName;
       // $videoName = Carbon::now()->timestamp.'.'.$this->video->extension();
        //$this->video->storeAs('pic',$videoName);
        //$aboutus->video = $videoName;
        $aboutus->video = $this->video;
        $aboutus->top_title = $this->top_title;
        $aboutus->left_title = $this->left_title;
        $aboutus->right_title = $this->right_title;
        $aboutus->body = $this->body;
        $aboutus->sign = $this->sign;
        $aboutus->category_id = $this->category_id;
        $aboutus->save();
        session()->flash('message','Aboutus has been created successfully!');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-aboutus-component')->layout('layouts.backend');
    }
}
