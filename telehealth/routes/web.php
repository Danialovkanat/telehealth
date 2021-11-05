<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// visiting page
Route::view('/', '/index-2');

Auth::routes();

Route::view('/home', '/index-2');

Route::view('/doctor-dashboard', '/doctor-dashboard');

Route::view('/appointments', '/appointments');

Route::view('/schedule-timings', '/schedule-timings');

Route::view('/my-patients', '/my-patients');

Route::view('/patient-profile', '/patient-profile');

Route::view('/chat-doctor', '/chat-doctor');
Route::view('/doctor-profile-settings', '/doctor-profile-settings');
Route::view('/reviews', '/reviews');
Route::view('/doctor-register', '/doctor-register');
Route::view('/patient-dashboard', '/patient-dashboard');
Route::view('/chat', '/chat');
Route::view('/voice-call', '/voice-call');
Route::view('/video-call', '/video-call');
Route::view('/login', '/login');
Route::view('/request', '/request');



// Users -----------------------------------------------------------------------------------
Route::group(['middleware' => 'auth'], function()
{
    Route::get('/dashboard', [UserController::class,'dashboard'])->name('user_dashboard');
});

// Admins ----------------------------------------------------------------------------------
Route::group(['prefix' => 'admin',  'middleware' => 'admin'], function()
{
    Route::get('/dashboard', [AdminController::class,'dashboard'])->name('admin_dashboard');
});

// Doctors --------------------------------------------------------------------------------
Route::group(['prefix' => 'doctor',  'middleware' =>'doctor'], function()
{
    Route::get('/dashboard', [DoctorController::class,'dashboard'])->name('doctor_dashboard');
});

// Pages


Route::view('/privacy', [PageController::class,'privacy'])->name('privacy');
Route::view('/search', [PageController::class,'search'])->name('search');
Route::view('/terms', [PageController::class,'terms'])->name('terms');


// Admin
// Route::view('/admin/dashboard', 'admin/dashboard')->name('admin.dashboard');
Route::view('/admin/appointment-list', 'admin/appointment-list')->name('admin.appointment-list');
Route::view('/admin/doctor-list', 'admin/doctor-list')->name('admin.doctor-list');
