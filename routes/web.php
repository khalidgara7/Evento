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
use App\Http\Controllers\organizer\ReservationsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StatisticsController;
use App\Http\Controllers\StoreFiltersController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UsersController;
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

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('loginform');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Registration Routes...
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('registerform');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

// Password Reset Routes...
Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('forget.passwordform');
Route::post('/password/email', [ForgotPasswordController::class, 'ResetPasswordRequest'])->name('forgetpassword.request');
Route::get('reset/{token}', [ResetPasswordController::class, 'reset'])->name('password.reset');
Route::post('/reset', [ResetPasswordController::class, 'GetnewPassword'])->name('password.postReset');

// google Routes...
Route::get('/google/redirect', [App\Http\Controllers\GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/google/callback', [App\Http\Controllers\GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');

Route::get('auth/gmail', 'Auth\LoginController@redirectToGmail');
Route::get('auth/gmail/callback', 'Auth\LoginController@handleGmailCallback');

// home Routes...
Route::get('/', [UpcomingEventsController::class, 'index'])->name('home');
Route::get('/event/{event}/show', [EventController::class, 'ShowEvent'])->name('event.details')
    ->middleware(['auth']);
Route::get('/profile', [OrganizerProfile::class, 'index'])->name('profile.index')->middleware(['auth']);
// all events Routes...
Route::get('/events', [EventController::class, 'fetchEvents'])->name('event.all');

// Route search and filter
Route::get('/searchBycategorie', [StoreFiltersController::class, 'filterByCategorie'])->name('searchBycategorie');
Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::middleware(['auth', 'organizer'])->group(function () {

    // infos for organizer Routes...
    Route::get('/organizer/form/{userId}', [OrganizerController::class, 'showOrganizerForm'])->name('organizer.form');
    Route::post('/organizer/store', [OrganizerController::class, 'storeOrganizerInfo'])->name('organizer.store');

    Route::get('/organizer/{event}/reservations', [EventReservationController::class, 'index'])->name('orangizer.reservations');
    Route::get('/reservations/{reservation}/activate', [EventReservationController::class, 'activateReservation'])->name('reservation.activate');
    Route::get('/reservations/{reservations}/cancel', [EventReservationController::class, 'cancelReservation'])->name('reservation.cancel');

    // profile Routes...
    Route::get('create/organizerevent', [OrganizerProfile::class, 'create'])->name('create.event');
    Route::post('store/event', [OrganizerProfile::class, 'store'])->name('store.event');
});

Route::middleware(['auth', 'admin'])->group(function () {
    // category Routes...
    Route::resource('category', CategoryController::class);

    // Event Routes...
    Route::resource('event', EventController::class);

    Route::get('/events/{eventId}/activate', [EventController::class, 'activateEvent'])->name('events.activate');
    Route::get('/events/{eventId}/cancel', [EventController::class, 'cancelEvent'])->name('events.cancel');

    Route::resource('user', UsersController::class);
    Route::post('/add-remove-role', [UsersController::class, 'addRemoveRole'])->name('add-remove-role');



});


Route::middleware(['auth'])->group(function () {
    Route::get('/ticket/{reservation}/ticket', [TicketController::class,'createTicket'])->name('generate.ticket');
    Route::get('/booking/{event}/event', [ReservationsController::class, 'bookEvent'])->name('booking.event');
});
