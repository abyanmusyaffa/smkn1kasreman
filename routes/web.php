<?php

use App\Livewire\About;
use App\Livewire\Components\MoreButton;
use App\Livewire\Home;
use App\Livewire\Staff;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Home::class);
Route::get('/about', About::class);
Route::get('/staff', Staff::class);