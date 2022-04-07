<?php

namespace App\Http\Livewire\Admin;

use App\Models\Team;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddTeamsComponent extends Component
{
    use WithFileUploads;

    public $top_title;
    public $left_title;
    public $right_title;
    public $body;
    public $pic;
    public $pic2;
    public $fname;
    public $sname;
    public $positions;
    public $soc_links;
    public $soc_icon;

    public function addTeams()
    {
        $teams = new Team();

        $imageName = Carbon::now()->timestamp.'.'.$this->pic->extension();
        $this->pic->storeAs('pic/team',$imageName);
        $teams->pic = $imageName;

        $testiName = Carbon::now()->timestamp.'.'.$this->pic2->extension();
        $this->pic2->storeAs('pic/team',$testiName);
        $teams->pic2 = $testiName;

        $teams->top_title = $this->top_title;
        $teams->left_title = $this->left_title;
        $teams->right_title = $this->right_title;
        $teams->body = $this->body;
        $teams->fname = $this->fname;
        $teams->sname = $this->sname;
        $teams->positions = $this->positions;
        $teams->soc_links = $this->soc_links;
        $teams->soc_icon = $this->soc_icon;
        $teams->save();
        session()->flash('message','Team has been created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-teams-component')->layout('layouts.backend');
    }
}
