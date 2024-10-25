<?php


use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MentionsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home.index');

Route::get('/contact', [ContactController::class,'index'])->name('contact.index');

Route::get('/carte', [CarteController::class,'index'])->name('carte.index');

Route::get('/mentions', [MentionsController::class,'index'])->name('mentions.index');

Route::get('/carte', [CarteController::class,'index'])->name('carte.index');

Route::get('admin/contact', [AdminContactController::class,'index'])->name('admin.contact.index');
