<?php

use App\Http\Livewire\Webapp\CategoryComponent;
use App\Http\Livewire\Website\CategoryCourses;
use App\Http\Livewire\Webapp\CourseComponent;
use App\Http\Livewire\Webapp\DashboardComponent;
use App\Http\Livewire\Webapp\LoginComponent;
use App\Http\Livewire\Webapp\RegisterComponent;
use App\Http\Livewire\Webapp\VenueComponent;
use App\Http\Livewire\Website\AboutComponent;
use App\Http\Livewire\Website\BespokeComponent;
use App\Http\Livewire\Website\ClassroomTraining;
use App\Http\Livewire\Website\ContactComponent;
use App\Http\Livewire\Website\ExpertiseComponent;
use App\Http\Livewire\Website\FaqComponent;
use App\Http\Livewire\Website\HomeComponent;
use App\Http\Livewire\Website\LocationComponent;
use App\Http\Livewire\Website\PrivacyComponent;
use App\Http\Livewire\Website\TermsComponent;
use App\Http\Livewire\Website\VirtualTraining;
use App\Http\Livewire\Website\CourseView;
use App\Http\Livewire\ContactLead;
use App\Http\Livewire\EnquiryLead;
use App\Http\Livewire\BespokeLead;
use App\Http\Controllers\CoursePost;
use App\Http\Controllers\AuthController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeComponent::class, );
Route::get('/Contact-Us', ContactComponent::class, );
Route::get('/About-Us', AboutComponent::class, );
Route::get('/Terms-Conditions', TermsComponent::class, );
Route::get('/Privacy-Policy', PrivacyComponent::class, );
Route::get('F-A-Qs', FaqComponent::class, );
Route::get('/Classroom-Training-Courses', ClassroomTraining::class, );
Route::get('/Virtual-Training-Courses', VirtualTraining::class, );
Route::get('/Our-Expertise', ExpertiseComponent::class, );
Route::get('/Locations', LocationComponent::class, );
Route::get('/Bespoke-Solutions', BespokeComponent::class, );
Route::get('/Course/{CategoryName}', CategoryCourses::class, );
// Route::get('/Course/{VenueName}', CategoryCourses::class, );
Route::get('/Course-Detail/{courseName}/{courseID}', CourseView::class, );
Route::post('/Course-Detail/{courseName}/{courseID}', [CourseView::class, 'EnquirySubmit'])->name('enquiry.submit');
// Route::get('/Course-Detail/{courseName}/{courseID}', function ($courseID, $courseName) { return view('livewire.website.course-view', compact('courseID', 'courseName') )->layout('layouts.web'); });


// Backend Routes

// Route::get('/MT-Register',RegisterComponent::class,);
// Route::post('/MT-Register',[RegisterComponent::class,'createUser'])->name('register.submit');

// Route::get('/MT-Login',LoginComponent::class,);
// Route::post('/MT-Login',[LoginComponent::class,'loginUser'])->name('login.submit');

// Route::get('/Dashboard',DashboardComponent::class,)->name('user.Dashboard');
// Route::get('/Create-Venue',VenueComponent::class,);
// Route::post('/Create-Venue',[VenueComponent::class, 'storeVenueinfo'])->name('venue.storeInfo');

// Route::get('/Create-Category',CategoryComponent::class,);
// Route::post('/Create-Category',[CategoryComponent::class, 'storeCategoryinfo'])->name('category.storeCateInfo');

// Route::get('/Create-Course',CourseComponent::class,);

// Route::post('/Create-Course',[CoursePost::class, 'addCourse'])->name('course.storeCourse');

// Route::post('/Contact-Us',[ContactComponent::class,'ContactSubmit'])->name('contact.submit');
// Route::post('/Bespoke-Solutions',[BespokeComponent::class,'BespokeSubmit'])->name('bespoke.submit');
    Route::get('/MT-Register', RegisterComponent::class, );
    Route::post('/MT-Register', [AuthController::class,'createUser'])->name('register.submit');

    Route::get('/MT-Login', LoginComponent::class, );
    Route::post('/MT-Login', [AuthController::class,'loginUser'])->name('login');
    Route::get('/LogOut', [AuthController::class,'logout']);

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::get('/Dashboard', DashboardComponent::class, )->name('user.Dashboard');
    Route::get('/Create-Venue', VenueComponent::class, );
    Route::post('/Create-Venue', [VenueComponent::class, 'storeVenueinfo'])->name('venue.storeInfo');

    Route::get('/Create-Category', CategoryComponent::class, );
    Route::post('/Create-Category', [CategoryComponent::class, 'storeCategoryinfo'])->name('category.storeCateInfo');

    Route::get('/Create-Course', CourseComponent::class, );

    Route::post('/Create-Course', [CoursePost::class, 'addCourse'])->name('course.storeCourse');

    Route::post('/Contact-Us', [ContactComponent::class,'ContactSubmit'])->name('contact.submit');
    Route::post('/Bespoke-Solutions', [BespokeComponent::class,'BespokeSubmit'])->name('bespoke.submit');

    Route::get('/Contact-Leads', ContactLead::class, );
    Route::get('/Enquiry-Leads', EnquiryLead::class, );
    Route::get('/Bespoke-Leads', BespokeLead::class, );
});
