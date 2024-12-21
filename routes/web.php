<?php

use App\Livewire\Components\MoreButton;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/t', MoreButton::class);
Route::get('/', Home::class);