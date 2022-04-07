<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class AdminCategoryComponent extends Component
{
    public function render()
    {
        $category = Category::all();
        return view('livewire.admin.admin-category-component',['category'=>$category])->layout('layouts.backend');
    }
}
