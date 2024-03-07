<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\backoffice\CoachController;
use App\Http\Controllers\Categories\CategoryController;
use App\Http\Controllers\event\EventController;
use App\Http\Controllers\home\UpcomingEventsController;
use App\Http\Controllers\Organizer\EventReservationController;
use App\Http\Controllers\organizer\OrganizerController;
use App\Http\Controllers\organizer\OrganizerProfile;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\StatisticsController;
use App\Models\Reservation;
use Illuminate\Support\Facades\Route;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home Routes...
Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes...

Route::get('/login', [LoginController::class,'showLoginForm'])->name('loginform');
Route::post('/login', [LoginController::class,'login'])->name('login');
Route::post('/logout', [LoginController::class,'logout'])->name('logout');

// Registration Routes...
Route::get('/register', [RegisterController::class,'showRegistrationForm'])->name('registerform');
Route::post('/register', [RegisterController::class,'register'])->name('register');

// infos for organizer Routes...
Route::get('/organizer/form/{userId}', [OrganizerController::class, 'showOrganizerForm'])->name('organizer.form');
Route::post('/organizer/store', [OrganizerController::class, 'storeOrganizerInfo'])->name('organizer.store');

// Password Reset Routes...
Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('forget.passwordform');
Route::post('/password/email', [ForgotPasswordController::class, 'ResetPasswordRequest'])->name('forgetpassword.request');
Route::get('reset/{token}', [ResetPasswordController::class,'reset'])->name('password.reset');
Route::post('/reset', [ResetPasswordController::class,'GetnewPassword'])->name('password.postReset');


// dashboard Routes...



// category Routes...
Route::resource('category',CategoryController::class);

// Event Routes...
Route::resource('event',EventController::class);

Route::get('/events/{eventId}/activate', [EventController::class, 'activateEvent'])->name('events.activate');
Route::get('/events/{eventId}/cancel', [EventController::class, 'cancelEvent'])->name('events.cancel');


// home Routes...
Route::get('/', [UpcomingEventsController::class,'index'])->name('home');
Route::get('/event/{event}/show', [EventController::class,'ShowEvent'])->name('event.details');

// all events Routes...
Route::get('/events', [EventController::class,'fetchEvents'])->name('event.all');

// profile Routes...
Route::get('/profile', [OrganizerProfile::class,'index'])->name('profile.index');
Route::get('create/organizerevent', [OrganizerProfile::class,'create'])->name('create.event');
Route::post('store/event', [OrganizerProfile::class,'store'])->name('store.event');

// Reservation Routes ...
Route::get('/booking/{event}/event', [ReservationsController::class,'bookEvent'])->name('booking.event');

Route::get('/organizer/{event}/reservations', [EventReservationController::class,'index'])->name('orangizer.reservations');