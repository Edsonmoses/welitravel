<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contact;
use Livewire\Component;

class AdminContactsComponent extends Component
{
    public function render()
    {
        $contacts = Contact::all();
        return view('livewire.admin.admin-contacts-component',['contacts'=>$contacts])->layout('layouts.backend');
    }
}
