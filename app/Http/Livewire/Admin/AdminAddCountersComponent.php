<?php

namespace App\Http\Livewire\Admin;

use App\Models\Counter;
use Livewire\Component;

class AdminAddCountersComponent extends Component
{
    public $counter_icon;
    public $counter;
    public $counter_name;

    public function addontact()
    {
        $counter = new Counter();
        $counter->counter_icon = $this->counter_icon;
        $counter->counter = $this->counter;
        $counter->counter_name = $this->counter_name;
        $counter->save();
        session()->flash('message','Counter has been created successfully!');
    }
    
    public function render()
    {
        return view('livewire.admin.admin-add-counters-component')->layout('layouts.backend');
    }
}
