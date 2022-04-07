<?php

namespace App\Http\Livewire\Admin;

use App\Models\HotelBooking;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddHotelBookingsComponent extends Component
{
    use WithFileUploads;

    public $bgCover;
    public $top_title;
    public $left_title;
    public $right_title;
    public $body;
    public $hotel_pic;
    public $hotel_pic2;
    public $hlocation;
    public $hotel_stars;
    public $hotel_rice;
    public $hotel_board;
    public $hotel_body;
    public $hotel_url;
    public $book_url;
    public $hotel_action;

    public function addBookings()
    {
        $bookings = new HotelBooking();
        $imageName = Carbon::now()->timestamp.'.'.$this->bgCover->extension();
        $this->bgCover->storeAs('pic/breadcrumbs',$imageName);
        $bookings->bgCover = $imageName;
        $imgName = Carbon::now()->timestamp.'.'.$this->hotel_pic->extension();
        $this->hotel_pic->storeAs('pic/recomended',$imgName);
        $bookings->hotel_pic = $imgName;
        $portName = Carbon::now()->timestamp.'.'.$this->hotel_pic2->extension();
        $this->hotel_pic2->storeAs('pic/recomended',$portName);
        $bookings->port_pic2 = $portName;
        $bookings->top_title = $this->top_title;
        $bookings->left_title = $this->left_title;
        $bookings->right_title = $this->right_title;
        $bookings->body = $this->body;
        $bookings->hlocation = $this->hlocation;
        $bookings->hotel_stars = $this->hotel_stars;
        $bookings->hotel_rice = $this->hotel_rice;
        $bookings->hotel_board = $this->hotel_board;
        $bookings->hotel_body = $this->hotel_body;
        $bookings->hotel_url = $this->hotel_url;
        $bookings->book_url = $this->book_url;
        $bookings->hotel_action = $this->hotel_action;
        $bookings->save();
        session()->flash('message','Hotel has been created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-hotel-bookings-component')->layout('layouts.backend');
    }
}
