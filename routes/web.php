<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MentionsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/contact', [ContactController::class,'index'])->name('contact');

Route::get('/carte', [CarteController::class,'index'])->name('carte');

Route::get('/mentions', [MentionsController::class,'index'])->name('mentions');

Route::get('/carte', [CarteController::class,'index'])->name('carte');