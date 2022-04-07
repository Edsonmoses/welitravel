<?php

namespace App\Http\Livewire\Admin;

use App\Models\Faq;
use Livewire\Component;

class AdminFaqsComponent extends Component
{
    public function render()
    {
        $faqs = Faq::all();
        return view('livewire.admin.admin-faqs-component',['faqs'=>$faqs])->layout('layouts.backend');
    }
}
