<?php

namespace App\Http\Livewire\Admin;

use App\Models\Gallery;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddGalleryComponent extends Component
{
    use WithFileUploads;
    
    public $bgCover;
    public $top_title;
    public $left_title;
    public $right_title;
    public $body;
    public $port_pic;
    public $port_pic2;
    public $port_cats;

    public function addGallery()
    {
        $gallery = new Gallery();
        $imageName = Carbon::now()->timestamp.'.'.$this->bgCover->extension();
        $this->bgCover->storeAs('pic/breadcrumbs',$imageName);
        $gallery->bgCover = $imageName;
        $imgName = Carbon::now()->timestamp.'.'.$this->port_pic->extension();
        $this->port_pic->storeAs('pic/portfolio',$imgName);
        $gallery->port_pic = $imgName;
        $portName = Carbon::now()->timestamp.'.'.$this->port_pic2->extension();
        $this->port_pic2->storeAs('pic/portfolio',$portName);
        $gallery->port_pic2 = $portName;
        $gallery->top_title = $this->top_title;
        $gallery->left_title = $this->left_title;
        $gallery->right_title = $this->right_title;
        $gallery->body = $this->body;
        $gallery->port_cats = $this->port_cats;
        $gallery->save();
        session()->flash('message','Gallery has been created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-gallery-component')->layout('layouts.backend');
    }
}
