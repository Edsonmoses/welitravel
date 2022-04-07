<?php

namespace App\Http\Livewire\Admin;

use App\Models\Blog;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddBlogComponent extends Component
{
    use WithFileUploads;
        
    public $bgCover;
    public $bgParallax;
    public $top_title;
    public $left_title;
    public $right_title;
    public $body;
    public $blog_pic;
    public $blog_pic2;
    public $blog_title;
    public $blog_text;

    public function addBlog()
    {
        $blogs = new Blog();
        $imageName = Carbon::now()->timestamp.'.'.$this->bgCover->extension();
        $this->bgCover->storeAs('assets/frontend/pic/blogs/main',$imageName);
        $blogs->bgCover = $imageName;
        $imgName = Carbon::now()->timestamp.'.'.$this->bgParallax->extension();
        $this->bgParallax->storeAs('assets/frontend/pic',$imgName);
        $blogs->bgParallax = $imgName;
        $picName = Carbon::now()->timestamp.'.'.$this->blog_pic->extension();
        $this->blog_pic->storeAs('assets/frontend/pic',$picName);
        $blogs->blog_pic = $picName;
        $picsName = Carbon::now()->timestamp.'.'.$this->blog_pic2->extension();
        $this->blog_pic2->storeAs('assets/frontend/pic',$picsName);
        $blogs->blog_pic2 = $picsName;
        $blogs->top_title = $this->top_title;
        $blogs->left_title = $this->left_title;
        $blogs->right_title = $this->right_title;
        $blogs->body = $this->body;
        $blogs->blog_title = $this->blog_title;
        $blogs->blog_text = $this->blog_text;
        $blogs->save();
        session()->flash('message','Blog has been created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-blog-component')->layout('layouts.backend');
    }
}
