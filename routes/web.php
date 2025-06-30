<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomePageController;
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

Route::get('/', [HomePageController::class, 'index'])->name('index');
Route::get('/contact', [HomePageController::class, 'contact'])->name('contact');
Route::post('/contact_us', [HomePageController::class, 'contact_us'])->name('contact_us');
Route::get('/about', [HomePageController::class, 'about'])->name('about');
Route::get('/gallery', [HomePageController::class, 'gallery'])->name('gallery');
Route::get('/services', [HomePageController::class, 'services'])->name('services');

Route::controller(AuthController::class)->group(function () {
    Route::match(['GET', 'POST'], '/user/login', 'login')->name('login');
    Route::match(['GET', 'POST'], '/logout', 'logout')->name('logout');
    Route::match(['GET', 'POST'], '/register', 'register')->name('register');
});
Route::match(['GET', 'POST'], '/admin/register', [AuthController::class, 'admin_create'])->name('admin_create');



Route::prefix('admin')->middleware(['middleware' => 'auth'])->group(function () {
    Route::match(['GET', 'POST'], '/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::match(['GET', 'POST'], '/allow_reg', [AdminController::class, 'allow_reg'])->name('allow_reg');

    Route::match(['GET', 'POST'], '/about', [AdminController::class, 'aboutUs']);

    Route::match(['GET', 'POST'], '/locations', [AdminController::class, 'locations'])->name('locations');
    Route::match(['GET', 'POST'], '/edit_location', [AdminController::class, 'edit_location'])->name('edit_location');

    Route::match(['GET', 'POST'], '/services', [AdminController::class, 'services'])->name('services');
    Route::match(['GET', 'POST'], '/edit_service', [AdminController::class, 'edit_service'])->name('edit_service');

    Route::match(['GET', 'POST'], '/galleries', [AdminController::class, 'galleries'])->name('galleries');
    Route::match(['GET', 'POST'], '/upload_image', [AdminController::class, 'upload_image'])->name('gallery');
    Route::match(['GET', 'POST'], '/delete_photo', [AdminController::class, 'delete_photo'])->name('delete_photo');

    Route::match(['GET', 'POST'], '/testimonials', [AdminController::class, 'testimonials']);
    Route::match(['GET', 'POST'], '/edit_testimonial', [AdminController::class, 'editTestimonail']);
    Route::match(['GET', 'POST'], '/delete_testimonial', [AdminController::class, 'deleteTestimonial']);

    Route::match(['GET', 'POST'], '/contacts', [AdminController::class, 'contacts'])->name('contacts');
    Route::match(['GET', 'POST'], '/delete_contact/{id}', [AdminController::class, 'deleteContact'])->name('delete_contact');

    Route::match(['GET', 'POST'], '/mails', [AdminController::class, 'mails'])->name('mails');
    Route::match(['GET', 'POST'], '/mails/reset', [AdminController::class, 'resetMails'])->name('resetmails');
    Route::match(['GET', 'POST'], '/mails/delete/{id}/', [AdminController::class, 'deleteMail']);

    Route::match(['GET', 'POST'], '/faqs', [AdminController::class, 'faqs']);
    Route::match(['GET', 'POST'], '/edit_faq', [AdminController::class, 'editFaqs']);
    Route::match(['GET', 'POST'], '/delete_faq', [AdminController::class, 'deletefaqs']);
});
