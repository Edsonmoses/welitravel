<?php

namespace App\Http\Livewire\Admin;

use App\Models\Services;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddServicesComponent extends Component
{
    use WithFileUploads;

    public $bgCover;
    public $top_title;
    public $title;
    public $stitle;
    public $ltext;
    public $text;

    public function addServices()
    {
        $services = new Services();
        $imageName = Carbon::now()->timestamp.'.'.$this->bgCover->extension();
        $this->bgCover->storeAs('assets/frontend/pic/services/main',$imageName);
        $services->bgCover = $imageName;
        $services->top_title = $this->top_title;
        $services->title = $this->title;
        $services->stitle = $this->stitle;
        $services->ltext = $this->ltext;
        $services->text = $this->text;
        $services->save();
        session()->flash('message','Services has been created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-services-component')->layout('layouts.backend');
    }
}
