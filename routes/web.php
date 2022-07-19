<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Website\HomePage;
use App\Http\Livewire\Website\ClassroomCourses;
use App\Http\Livewire\Website\VirtualCourses;
use App\Http\Livewire\Website\ContactUs;
use App\Http\Livewire\Website\AboutPage;
use App\Http\Livewire\Website\ExpertisePage;
use App\Http\Livewire\Website\CategoryWiseCourses;
use App\Http\Livewire\Website\VenueWiseCourses;
use App\Http\Livewire\Website\CoursesDetails;
use App\Http\Livewire\Website\PrivacyPage;
use App\Http\Livewire\Website\TermsConditions;
use App\Http\Livewire\Website\LocationPage;
use App\Http\Livewire\Website\BespokePage;
use App\Http\Livewire\Website\CourseRegistration;

use App\Http\Livewire\WebApp\DashboardPage;
use App\Http\Livewire\WebApp\CreateCategory;
use App\Http\Livewire\WebApp\CreateVenue;
use App\Http\Livewire\WebApp\CreateCourse;
use App\Http\Livewire\WebApp\DataLeads;

use App\Http\Livewire\WebApp\RegistrationForm;
use App\Http\Livewire\WebApp\LoginForm;

use App\Http\Controllers\CoursePost;
use App\Http\Controllers\AuthController;

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

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cache is cleared";
});

Route::get('/MT-Register', RegistrationForm::class,);
Route::post('/MT-Register', [AuthController::class,'createUser'])->name('register.submit');

Route::get('/MT-Login', LoginForm::class,);
Route::post('/MT-Login', [AuthController::class,'loginUser'])->name('login');
Route::get('/WebApp/Logout', [AuthController::class,'logout']);

Route::get('/', HomePage::class,);
Route::get('/Classroom-Courses', ClassroomCourses::class,);
Route::get('/Virtual-Courses', VirtualCourses::class,);
Route::get('/Contact-Us', ContactUs::class,);
Route::post('/Contact-Us', [ContactUs::class, 'ContactSubmit'])->name('contact.submit');
Route::get('/About-Us', AboutPage::class,);
Route::get('/Privacy-Policy', PrivacyPage::class,);
Route::get('/Terms-Conditions', TermsConditions::class,);
Route::get('/Mastery-Areas', ExpertisePage::class,);
Route::get('/Training-Venues', LocationPage::class,);
Route::get('/In-House', BespokePage::class,);
Route::post('/In-House', [BespokePage::class, 'BespokeSubmit'])->name('bespoke.submit');
Route::get('/Course/Category/{CategoryName}', CategoryWiseCourses::class,);
Route::get('/Course/Venues/{VenueName}', VenueWiseCourses::class,);
Route::get('/Course-Detail/{courseName}/{courseID}', CoursesDetails::class,);
Route::post('/Course-Detail/{courseName}/{courseID}', [CoursesDetails::class, 'EnquirySubmit'])->name('enquiry.submit');
Route::get('/Course-Registration/{courseName}/{courseID}', CourseRegistration::class,);
Route::post('/Course-Registration/{courseName}/{courseID}', [CourseRegistration::class, 'courseRegistration'])->name('courseregister.submit');

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/WebApp/Dashboard', DashboardPage::class,)->name('user.Dashboard');
    Route::get('/WebApp/Create-Category', CreateCategory::class,);
    Route::post('/WebApp/Create-Category', [CreateCategory::class, 'storeCategoryinfo'])->name('category.storeCateInfo');
    Route::get('/WebApp/Create-Venue', CreateVenue::class, );
    Route::post('/WebApp/Create-Venue', [CreateVenue::class, 'storeVenueinfo'])->name('venue.storeInfo');
    Route::get('/WebApp/Create-Course', CreateCourse::class, );
    Route::post('/WebApp/Create-Course', [CoursePost::class, 'addCourse'])->name('course.storeCourse');
    Route::get('/WebApp/DataLeads', DataLeads::class,);
});
