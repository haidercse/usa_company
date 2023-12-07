<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PagesController;
use Illuminate\Support\Facades\Route;


// frontend 
Route::get('/',[HomeController::class,'index'])->name('frontend.index');
Route::get('/{pages}',PagesController::class)->name('pages');
