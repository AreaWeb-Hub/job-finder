<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\Home;

Route::get('/', Home::class)->name('home');
