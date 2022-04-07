<?php

namespace App\Http\Livewire\Admin;

use App\Models\Testimonils;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddTestimonilsComponent extends Component
{
    use WithFileUploads;

    public $bgParallax;
    public $top_title;
    public $left_title;
    public $right_title;
    public $testi_pic;
    public $testi_pic2;
    public $author_pic;
    public $author_pic2;
    public $testi_title;
    public $testi_title2;
    public $testi_stars;
    public $testi_body;
    public $testi_url;

    public function addTestimony()
    {
        $testimony = new Testimonils();

        $imageName = Carbon::now()->timestamp.'.'.$this->bgParallax->extension();
        $this->bgParallax->storeAs('pic',$imageName);
        $testimony->bgParallax = $imageName;

        $testiName = Carbon::now()->timestamp.'.'.$this->testi_pic->extension();
        $this->testi_pic->storeAs('pic/testimonial',$testiName);
        $testimony->testi_pic = $testiName;

        $testimName = Carbon::now()->timestamp.'.'.$this->testi_pic2->extension();
        $this->testi_pic2->storeAs('pic/testimonial',$testimName);
        $testimony->testi_pic2 = $testimName;

        $authorName = Carbon::now()->timestamp.'.'.$this->author_pic->extension();
        $this->author_pic->storeAs('pic/testimonial/author',$authorName);
        $testimony->author_pic = $authorName;

        $authorsName = Carbon::now()->timestamp.'.'.$this->author_pic2->extension();
        $this->author_pic2->storeAs('pic/testimonial/author',$authorsName);
        $testimony->author_pic2 = $authorsName;

        $testimony->top_title = $this->top_title;
        $testimony->left_title = $this->left_title;
        $testimony->right_title = $this->right_title;
        $testimony->testi_title = $this->testi_title;
        $testimony->testi_title2 = $this->testi_title2;
        $testimony->testi_stars = $this->testi_stars;
        $testimony->testi_body = $this->testi_body;
        $testimony->testi_url = $this->testi_url;
        $testimony->save();
        session()->flash('message','Testimony has been created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-testimonils-component')->layout('layouts.backend');
    }
}
