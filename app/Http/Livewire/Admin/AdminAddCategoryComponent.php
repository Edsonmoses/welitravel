<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class AdminAddCategoryComponent extends Component
{
    public $name;
    public $slug;

    public function addCategory()
    {
        $category = new Category();

        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();
        session()->flash('message','category has been created successfully!');
    }
    
    public function render()
    {
        return view('livewire.admin.admin-add-category-component')->layout('layouts.backend');
    }
}
