<?php

namespace App\Http\Livewire\Admin;

use App\Models\Blog;
use Livewire\Component;

class AdminBlogComponent extends Component
{
    public function render()
    {
        $blogs = Blog::all();
        return view('livewire.admin.admin-blog-component',['blogs'=>$blogs])->layout('layouts.backend');
    }
}
