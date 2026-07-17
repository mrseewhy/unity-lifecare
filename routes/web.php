<?php

use App\Livewire\Noauth\Blog;
use App\Livewire\Noauth\Faqs;
use App\Livewire\Noauth\Home;
use App\Livewire\Noauth\About;
use App\Livewire\Noauth\Draft;
use App\Mail\ClientSubmission;
use App\Livewire\Auth\Allusers;
use App\Livewire\Auth\Editpost;
use App\Livewire\Auth\Edituser;
use App\Livewire\Auth\Dashboard;
use App\Livewire\Noauth\Careers;
use App\Livewire\Noauth\Contact;
use App\Livewire\Auth\Allcareers;
use App\Livewire\Auth\Createuser;
use App\Livewire\Auth\Editcareer;
use App\Livewire\Noauth\Referral;
use App\Livewire\Noauth\Services;
use App\Livewire\Noauth\Thankyou;
use App\Livewire\Noauth\Viewblog;
use App\Livewire\Noauth\Hometasks;
use App\Livewire\Auth\Allblogposts;
use App\Livewire\Auth\Createcareer;
use App\Livewire\Noauth\Viewcareer;
use App\Livewire\Noauth\Nursingcare;
use Illuminate\Support\Facades\Mail;
use App\Livewire\Auth\Createblogpost;
use App\Livewire\Auth\Recentmessages;
use App\Livewire\Noauth\Saveddetails;
use App\Livewire\Noauth\Sharedliving;
use Illuminate\Support\Facades\Route;
use App\Livewire\Noauth\PrivacyPolicy;
use App\Livewire\Noauth\Travelsupport;
use App\Livewire\Noauth\Householdtasks;
use App\Livewire\Auth\Contactedmessages;
use App\Livewire\Noauth\FinancialCoaching;
use App\Livewire\Auth\VisitorsRegistration;
use App\Livewire\Noauth\FinancialWellbeing;
use App\Livewire\Noauth\Peoplecenteredcare;
use App\Livewire\Noauth\Supporttransitions;
use App\Livewire\Noauth\TermsAndConditions;
use App\Livewire\Auth\Contactedregistration;
use App\Livewire\Noauth\Communityactivities;
use App\Livewire\Noauth\Communityengagement;
use App\Livewire\Noauth\Communityintegration;
use App\Livewire\Noauth\FinancialCounselling;
use App\Livewire\Noauth\Homeresponsibilities;
use App\Livewire\Noauth\Dailylifetaskssupport;
use App\Livewire\Noauth\FinancialLiteracyWorkshops;

// Route::view('/', 'welcome');
Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/services', Services::class)->name('services');
Route::get('/blog', Blog::class)->name('blog');
Route::get('/blog/{slug}', Viewblog::class)->name('view-blog');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/careers', Careers::class)->name('careers');
Route::get('/career/{slug}', Viewcareer::class)->name('view-careers');
Route::get('/faqs', Faqs::class)->name('faqs');
Route::get('/people-centered-care', Peoplecenteredcare::class)->name('people-centered-care');
Route::get('/daily-life-tasks-support', Dailylifetaskssupport::class)->name('daily-life-tasks-support');
Route::get('/community-integration', Communityintegration::class)->name('community-integration');
Route::get('/home-responsibilities', Homeresponsibilities::class)->name('home-responsibilities');
Route::get('/nursing-care', Nursingcare::class)->name('nursing-care');
Route::get('/support-transitions', Supporttransitions::class)->name('support-transitions');
Route::get('/shared-living', Sharedliving::class)->name('shared-living');
Route::get('/home-tasks', Hometasks::class)->name('home-tasks');
Route::get('/community-activities', Communityactivities::class)->name('community-activities');
Route::get('/travel-support', Travelsupport::class)->name('travel-support');
Route::get('/community-engagement', Communityengagement::class)->name('community-engagement');
Route::get('/household-tasks', Householdtasks::class)->name('household-tasks');
Route::get('/visitors-registration', Referral::class)->name('visitors-registration');
Route::get('/thank-you', Thankyou::class)->name('thankyou');
Route::get('/draft-saved', Draft::class)->name('draft');
Route::get('/draft/{uuid}', Saveddetails::class)->name('saveddetails');
Route::get('/privacy-policy', PrivacyPolicy::class)->name('privacypolicy');
Route::get('/terms-and-conditions', TermsAndConditions::class)->name('termsandconditions');
Route::get('/financial-wellbeing', FinancialWellbeing::class)->name('financial-wellbeing');
Route::get('/financial-counselling', FinancialCounselling::class)->name('financial-counselling');
Route::get('/financial-coaching', FinancialCoaching::class)->name('financial-coaching');
Route::get('/financial-literacy-workshops', FinancialLiteracyWorkshops::class)->name('financial-literacy-workshops');

Route::get('/dashboard', Dashboard::class)->middleware('auth', 'verified')->name('dashboard');
Route::get('/dashboard/contactform/recent-messages', Recentmessages::class)->middleware(['auth'])->name('recentmessages');
Route::get('/dashboard/contactform/contacted-messages', Contactedmessages::class)->middleware(['auth'])->name('contactedmessages');
Route::get('/dashboard/users/create', Createuser::class)->middleware(['auth'])->name('createuser');
Route::get('/dashboard/users/all', Allusers::class)->middleware(['auth'])->name('allusers');
Route::get('/dashboard/users/{id}/edit', Edituser::class)->middleware(['auth'])->name('edituser');
Route::get('/dashboard/blog/create', Createblogpost::class)->middleware(['auth'])->name('createblogpost');
Route::get('/dashboard/blog/all', Allblogposts::class)->middleware(['auth'])->name('allblogposts');
Route::get('/dashboard/blog/{slug}/edit', Editpost::class)->middleware(['auth'])->name('editpost');
Route::get('/dashboard/career/create', Createcareer::class)->middleware(['auth'])->name('createcareer');
Route::get('/dashboard/career/all', Allcareers::class)->middleware(['auth'])->name('allcareers');
Route::get('/dashboard/career/{slug}/edit', Editcareer::class)->middleware(['auth'])->name('editcareer');
Route::get('/dashboard/visitors-registration/new', VisitorsRegistration::class)->middleware(['auth'])->name('visitors-registration');
Route::get('/dashboard/visitors-registration/contacted', Contactedregistration::class)->middleware(['auth'])->name('contacted-registration');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::get('/testroute', function () {
    $name = 'Ogidan';
    $data = ['name' => $name];
    Mail::to('segunisaboy@gmail.com')->queue(new ClientSubmission($data));
});
Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
