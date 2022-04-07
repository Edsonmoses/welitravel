<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contact;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddContactsComponent extends Component
{
    use WithFileUploads;

     public $bgCover;
     public $title;
     public $name;
     public $cont_icon;
     public $cws_social;
     public $cws_url;

    public function addContact()
    {
        $contact = new Contact();
        $imageName = Carbon::now()->timestamp.'.'.$this->bgCover->extension();
        $this->bgCover->storeAs('pic/breadcrumbs',$imageName);
        $contact->bgCover = $imageName;
        $contact->name = $this->name;
        $contact->cont_icon = $this->cont_icon;
        $contact->cws_social = $this->cws_social;
        $contact->cws_url = $this->cws_url;
        $contact->save();
        session()->flash('message','Contact has been created successfully!');
    }
    
    public function render()
    {
        return view('livewire.admin.admin-add-contacts-component')->layout('layouts.backend');
    }
}
