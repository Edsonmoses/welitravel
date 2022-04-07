<?php

namespace App\Http\Livewire\Admin;

use App\Models\Facts;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddFactsComponent extends Component
{
    use WithFileUploads;

    public $bgCover;
    public $top_title;
    public $title;
    public $right_title;
    public $body;
    public $image;

    public function addFacts()
    {
        $facts = new Facts();
        $imageName = Carbon::now()->timestamp.'.'.$this->bgCover->extension();
        $this->bgCover->storeAs('pic/breadcrumbs',$imageName);
        $facts->bgCover = $imageName;
        $imgName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('pic',$imgName);
        $facts->image = $imgName;
        $facts->top_title = $this->top_title;
        $facts->title = $this->title;
        $facts->right_title = $this->right_title;
        $facts->body = $this->body;
        $facts->save();
        session()->flash('message','Fact has been created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-facts-component')->layout('layouts.backend');
    }
}
