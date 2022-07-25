<?php

use App\Http\Livewire\AboutUsComponent;
use App\Http\Livewire\Admin\AdminAboutusComponent;
use App\Http\Livewire\Admin\AdminAddAboutusComponent;
use App\Http\Livewire\Admin\AdminAddBlogComponent;
use App\Http\Livewire\Admin\AdminAddBookingTermsComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCommitmentsComponent;
use App\Http\Livewire\Admin\AdminAddCountersComponent;
use App\Http\Livewire\Admin\AdminAddFactsComponent;
use App\Http\Livewire\Admin\AdminAddGalleryComponent;
use App\Http\Livewire\Admin\AdminAddHotelBookingsComponent;
use App\Http\Livewire\Admin\AdminAddPackagesComponent;
use App\Http\Livewire\Admin\AdminAddServicesComponent;
use App\Http\Livewire\Admin\AdminAddSliderComponent;
use App\Http\Livewire\Admin\AdminAddTeamsComponent;
use App\Http\Livewire\Admin\AdminAddToursComponent;
use App\Http\Livewire\Admin\AdminAddWallpapersComponent;
use App\Http\Livewire\Admin\AdminBlogComponent;
use App\Http\Livewire\Admin\AdminBookingTermsComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminCommitmentsComponent;
use App\Http\Livewire\Admin\AdminContactsComponent;
use App\Http\Livewire\Admin\AdminCountersComponent;
use App\Http\Livewire\Admin\AdminEditAboutusComponent;
use App\Http\Livewire\Admin\AdminEditBookingTermsComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCommitmentsComponent;
use App\Http\Livewire\Admin\AdminEditCountersComponent;
use App\Http\Livewire\Admin\AdminEditFactsComponent;
use App\Http\Livewire\Admin\AdminEditGalleryComponent;
use App\Http\Livewire\Admin\AdminEditHotelBookingsComponent;
use App\Http\Livewire\Admin\AdminEditPackagesComponent;
use App\Http\Livewire\Admin\AdminEditServicesComponent;
use App\Http\Livewire\Admin\AdminEditSliderComponent;
use App\Http\Livewire\Admin\AdminEditTeamsComponent;
use App\Http\Livewire\Admin\AdminEditToursComponent;
use App\Http\Livewire\Admin\AdminEditWallpapersComponent;
use App\Http\Livewire\Admin\AdminFactsComponent;
use App\Http\Livewire\Admin\AdminFaqsComponent;
use App\Http\Livewire\Admin\AdminGalleryComponent;
use App\Http\Livewire\Admin\AdminHotelBookingsComponent;
use App\Http\Livewire\Admin\AdminPackagesComponent;
use App\Http\Livewire\Admin\AdminServicesComponent;
use App\Http\Livewire\Admin\AdminSettingSlidersComponent;
use App\Http\Livewire\Admin\AdminSliderComponent;
use App\Http\Livewire\Admin\AdminTeamsComponent;
use App\Http\Livewire\Admin\AdminTestimonilsComponent;
use App\Http\Livewire\Admin\AdminToursComponent;
use App\Http\Livewire\Admin\AdminWallpapersComponent;
use App\Http\Livewire\Admin\DashboardComponent;
use App\Http\Livewire\BlogComponent;
use App\Http\Livewire\BookingTermsComponent;
use App\Http\Livewire\CommitmentComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\FagComponent;
use App\Http\Livewire\GalleryToursComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\HotelBookingsComponent;
use App\Http\Livewire\PackagesComponent;
use App\Http\Livewire\ServicesComponent;
use App\Http\Livewire\WallpaperComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', HomeComponent::class);
Route::get('/About-us', AboutUsComponent::class);
Route::get('/Services', ServicesComponent::class);
Route::get('/Packages', PackagesComponent::class);
Route::get('/Blog', BlogComponent::class);
Route::get('/Contact', ContactComponent::class);
Route::get('/Our-commitment', CommitmentComponent::class);
Route::get('/Hotel-booking', HotelBookingsComponent::class);
Route::get('/Booking-terms', BookingTermsComponent::class);
Route::get('/Gallery', GalleryToursComponent::class);
Route::get('/Faq', FagComponent::class);
Route::get('/Wallpaper', WallpaperComponent::class);


//for About us
Route::get('/admin/dashboard', DashboardComponent::class)->name('admin.dashboard');

//for About us
Route::get('/admin/about-us', AdminAboutusComponent::class)->name('admin.aboutus');
Route::get('/admin/about-us/add', AdminAddAboutusComponent::class)->name('admin.addaboutus');
Route::get('/admin/about-us/edit/{aboutus_slug}', AdminEditAboutusComponent::class)->name('admin.editaboutus');

//for Blog
Route::get('/admin/blog', AdminBlogComponent::class)->name('admin.blog');
Route::get('/admin/blog/add', AdminAddBlogComponent::class)->name('admin.addblog');
Route::get('/admin/blog/edit/{blog_slug}', AdminBlogComponent::class)->name('admin.editblog');

//for Booking terms
Route::get('/admin/booking-terms', AdminBookingTermsComponent::class)->name('admin.booking');
Route::get('/admin/booking-terms/add', AdminAddBookingTermsComponent::class)->name('admin.addbooking');
Route::get('/admin/booking-terms/edit/{booking_slug}', AdminEditBookingTermsComponent::class)->name('admin.editbooking');

//for Category
Route::get('/admin/category', AdminCategoryComponent::class)->name('admin.category');
Route::get('/admin/category/add', AdminAddCategoryComponent::class)->name('admin.addcategory');
Route::get('/admin/category/edit/{category_slug}', AdminEditCategoryComponent::class)->name('admin.editcategory');

//for Commitments
Route::get('/admin/commitments', AdminCommitmentsComponent::class)->name('admin.commitments');
Route::get('/admin/commitments/add', AdminAddCommitmentsComponent::class)->name('admin.commit_add');
Route::get('/admin/commitments/edit/{commit_slug}', AdminEditCommitmentsComponent::class)->name('admin.commit_edit');

//for Contants
Route::get('/admin/contact-us', AdminContactsComponent::class)->name('admin.contacts');
Route::get('/admin/contact-us/add', AdminContactsComponent::class)->name('admin.addcontacts');
Route::get('/admin/contact-us/edit/{cont_slug}', AdminContactsComponent::class)->name('admin.editcontacts');

//for Counters
Route::get('/admin/counters', AdminCountersComponent::class)->name('admin.counters');
Route::get('/admin/counters/add', AdminAddCountersComponent::class)->name('admin.addcounters');
Route::get('/admin/counters/edit/{counters_slug}', AdminEditCountersComponent::class)->name('admin.editcounters');

//for Facts
Route::get('/admin/facts', AdminFactsComponent::class)->name('admin.facts');
Route::get('/admin/facts/add', AdminAddFactsComponent::class)->name('admin.addfacts');
Route::get('/admin/facts/edit/{facts_slug}', AdminEditFactsComponent::class)->name('admin.editfacts');

//for Faqs
Route::get('/admin/faqs', AdminFaqsComponent::class)->name('admin.faqs');
Route::get('/admin/faqs/add', AdminFaqsComponent::class)->name('admin.addfaqs');
Route::get('/admin/faqs/edit/{faqs_slug}', AdminFaqsComponent::class)->name('admin.editfaqs');

//for Gallery
Route::get('/admin/gallery', AdminGalleryComponent::class)->name('admin.gallery');
Route::get('/admin/gallery/add', AdminAddGalleryComponent::class)->name('admin.addgallery');
Route::get('/admin/gallery/edit/{gallery_slug}', AdminEditGalleryComponent::class)->name('admin.editgallery');

//for Hotel bookings
Route::get('/admin/hotel-bookings', AdminHotelBookingsComponent::class)->name('admin.bookings');
Route::get('/admin/hotel-bookings/add', AdminAddHotelBookingsComponent::class)->name('admin.addbookings');
Route::get('/admin/hotel-bookings/edit/{bookings_slug}', AdminEditHotelBookingsComponent::class)->name('admin.editbookings');

//for Packages
Route::get('/admin/packages', AdminPackagesComponent::class)->name('admin.packages');
Route::get('/admin/packages/add', AdminAddPackagesComponent::class)->name('admin.addpackages');
Route::get('/admin/packages/edit/{pack_slug}', AdminEditPackagesComponent::class)->name('admin.editpackages');

//for Services
Route::get('/admin/services', AdminServicesComponent::class)->name('admin.services');
Route::get('/admin/services/add', AdminAddServicesComponent::class)->name('admin.addservices');
Route::get('/admin/services/edit/{services_slug}', AdminEditServicesComponent::class)->name('admin.editservices');

//for Slider
Route::get('/admin/slider', AdminSliderComponent::class)->name('admin.slider');
Route::get('/admin/add-slider', AdminAddSliderComponent::class)->name('admin.addslider');
Route::get('/admin/edit-slider/{slug}', AdminEditSliderComponent::class)->name('admin.editslider');
Route::get('/admin/slider-setting', AdminSettingSlidersComponent::class)->name('admin.slidersetting');

//for Teams
Route::get('/admin/teams', AdminTeamsComponent::class)->name('admin.teams');
Route::get('/admin/teams/add', AdminAddTeamsComponent::class)->name('admin.addteams');
Route::get('/admin/teams/edit/{teams_slug}', AdminEditTeamsComponent::class)->name('admin.editteams');

//for Testimonils
Route::get('/admin/testimonils', AdminTestimonilsComponent::class)->name('admin.testimonils');
Route::get('/admin/testimonils/add', AdminTestimonilsComponent::class)->name('admin.addtestimonils');
Route::get('/admin/testimonils/edit/{testi_slug}', AdminTestimonilsComponent::class)->name('admin.edittestimonils');

//for Tours
Route::get('/admin/tours', AdminToursComponent::class)->name('admin.tours');
Route::get('/admin/tours/add', AdminAddToursComponent::class)->name('admin.addtours');
Route::get('/admin/tours/edit/{tours_slug}', AdminEditToursComponent::class)->name('admin.edittours');

//for Wallpapers
Route::get('/admin/wallpapers', AdminWallpapersComponent::class)->name('admin.wallpapers');
Route::get('/admin/wallpapers/add', AdminAddWallpapersComponent::class)->name('admin.addwallpapers');
Route::get('/admin/wallpapers/edit/{wall_slug}', AdminEditWallpapersComponent::class)->name('admin.editwallpapers');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
