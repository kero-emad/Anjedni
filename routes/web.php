<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceRequestController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PortfolioImageController;
use App\Http\Controllers\ProfileController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/signup', [UserController::class, 'register']);
Route::post('/signup',[UserController::class,'handleRegister'])->name('register');


Route::get('/login',[UserController::class,'login']);
Route::post('/login',[UserController::class,'handleLogin'])->name('login');

Route::get('/logout',[UserController::class,'logout']);


Route::get('/users',[UserController::class,'index']);
Route::delete('users/delete/{id}',[UserController::class,'destroy']);

Route::get('/home', function () {
    return view('home');
})->name('home');




Route::get('/allrequests', [ServiceRequestController::class, 'admin']);
Route::get('/requests', [ServiceRequestController::class, 'index'])->name('requests.index');
Route::get('/requests/create', [ServiceRequestController::class, 'create'])->name('requests.create');
Route::post('/requests', [ServiceRequestController::class, 'store'])->name('requests.store');
Route::delete('requests/delete/{id}',[ServiceRequestController::class,'destroy']);
Route::get('requests/show/{id}',[ServiceRequestController::class,'show']);
Route::get('requests/old',[ServiceRequestController::class,'oldRequests']);
Route::get('offers/accepted',[ServiceRequestController::class,'AcceptedOffers']);

Route::get('/offers',[OfferController::class,'index']);
Route::post('/offers/{request}', [OfferController::class, 'store'])->name('offers.store');
Route::delete('offers/delete/{id}',[OfferController::class,'destroy']);

Route::get('/appointments/create/{offer}', [AppointmentController::class, 'create'])->name('appointments.create');
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
Route::get('/allappointments', [AppointmentController::class, 'index']);
Route::delete('appointments/delete/{id}',[AppointmentController::class,'destroy']);


Route::get('/times/create', [TimeController::class, 'create'])->name('times.create');
Route::post('/times', [TimeController::class, 'store'])->name('times.store');
Route::delete('times/delete/{id}',[TimeController::class,'destroy']);

Route::get('/payments/create/{offer}', [PaymentController::class, 'create'])->name('payments.create');
Route::post('/payments', [PaymentController::class, 'store'])->name('payments.store');


Route::get('/portfolio', [PortfolioImageController::class, 'edit']);
Route::post('/portfolio/store', [PortfolioImageController::class, 'store'])->name('portfolio.store');
Route::delete('portfolio/delete/{id}',[PortfolioImageController::class,'destroy']);
Route::get('/portfolio/show/{provider_id}',[PortfolioImageController::class,'show']);

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');