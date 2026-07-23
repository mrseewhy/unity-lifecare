<?php

use App\Livewire\Auth\Allblogposts;
use App\Livewire\Auth\Allcareers;
use App\Livewire\Auth\Allusers;
use App\Livewire\Auth\Contactedmessages;
use App\Livewire\Auth\Contactedregistration;
use App\Livewire\Auth\Createblogpost;
use App\Livewire\Auth\Createcareer;
use App\Livewire\Auth\Createuser;
use App\Livewire\Auth\Dashboard;
use App\Livewire\Auth\Editcareer;
use App\Livewire\Auth\Editpost;
use App\Livewire\Auth\Edituser;
use App\Livewire\Auth\Recentmessages;
use App\Livewire\Auth\VisitorsRegistration;
use App\Livewire\Noauth\About;
use App\Livewire\Noauth\Blog;
use App\Livewire\Noauth\Careers;
use App\Livewire\Noauth\Communityactivities;
use App\Livewire\Noauth\Communityengagement;
use App\Livewire\Noauth\Communityintegration;
use App\Livewire\Noauth\Contact;
use App\Livewire\Noauth\Dailylifetaskssupport;
use App\Livewire\Noauth\Draft;
use App\Livewire\Noauth\Faqs;
use App\Livewire\Noauth\FinancialCoaching;
use App\Livewire\Noauth\FinancialCounselling;
use App\Livewire\Noauth\FinancialLiteracyWorkshops;
use App\Livewire\Noauth\FinancialWellbeing;
use App\Livewire\Noauth\Home;
use App\Livewire\Noauth\Homeresponsibilities;
use App\Livewire\Noauth\Hometasks;
use App\Livewire\Noauth\Householdtasks;
use App\Livewire\Noauth\Nursingcare;
use App\Livewire\Noauth\Peoplecenteredcare;
use App\Livewire\Noauth\PrivacyPolicy;
use App\Livewire\Noauth\Referral;
use App\Livewire\Noauth\Saveddetails;
use App\Livewire\Noauth\Services;
use App\Livewire\Noauth\Sharedliving;
use App\Livewire\Noauth\Supporttransitions;
use App\Livewire\Noauth\TermsAndConditions;
use App\Livewire\Noauth\Thankyou;
use App\Livewire\Noauth\Travelsupport;
use App\Livewire\Noauth\Viewblog;
use App\Livewire\Noauth\Viewcareer;
use App\Http\Controllers\RegistrationDocumentDownloadController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth', 'approved'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->middleware('verified')->name('dashboard');
    Route::get('/dashboard/contactform/recent-messages', Recentmessages::class)->name('recentmessages');
    Route::get('/dashboard/contactform/contacted-messages', Contactedmessages::class)->name('contactedmessages');
    Route::get('/dashboard/blog/create', Createblogpost::class)->name('createblogpost');
    Route::get('/dashboard/blog/all', Allblogposts::class)->name('allblogposts');
    Route::get('/dashboard/blog/{slug}/edit', Editpost::class)->name('editpost');
    Route::get('/dashboard/career/create', Createcareer::class)->name('createcareer');
    Route::get('/dashboard/career/all', Allcareers::class)->name('allcareers');
    Route::get('/dashboard/career/{slug}/edit', Editcareer::class)->name('editcareer');
    Route::get('/dashboard/visitors-registration/new', VisitorsRegistration::class)->name('new-visitors-registration');
    Route::get('/dashboard/visitors-registration/contacted', Contactedregistration::class)->name('contacted-registration');
    Route::get('/dashboard/visitors-registration/{submission}/document', RegistrationDocumentDownloadController::class)->name('registration-document.download');

    Route::middleware('admin')->group(function () {
        Route::get('/dashboard/users/create', Createuser::class)->name('createuser');
        Route::get('/dashboard/users/all', Allusers::class)->name('allusers');
        Route::get('/dashboard/users/{id}/edit', Edituser::class)->name('edituser');
    });
});

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth', 'approved'])
    ->name('profile');

require __DIR__.'/auth.php';
