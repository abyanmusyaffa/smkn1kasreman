<?php

use App\Livewire\About;
use App\Livewire\Achievement;
use App\Livewire\Alumni;
use App\Livewire\Download;
use App\Livewire\Home;
use App\Livewire\Major;
use App\Livewire\Staff;
use App\Livewire\Partner;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Home::class);
Route::get('/about', About::class);
Route::get('/staff', Staff::class);
Route::get('/achievement', Achievement::class);
Route::get('/partner', Partner::class);
Route::get('/alumni', Alumni::class);
Route::get('/download', Download::class);
Route::get('/major', Major::class);