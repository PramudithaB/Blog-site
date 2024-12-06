<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/admindashboard', [HomeController::class, 'admindashboard'])->name('admindashboard')->middleware('auth','admin');
Route::get('/createblogs', [HomeController::class, 'createblogs'])->name('createblogs');
Route::post('/blog/store',[HomeController::class, 'store'])->name('store');
Route::get('/edit/{blog_id}', [HomeController::class, 'edit'])->name('edit');
Route::put('/editblogs/{blog_id}', [HomeController::class, 'editblogs'])->name('editblogs');
Route::get('/delete/{blog_id}', [HomeController::class, 'delete'])->name('delete');
Route::get('/dashboard',[HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/search',[HomeController::class, 'search'])->name('search');
Route::get('/imagedashboard/{blog_id}',[HomeController::class,'imagedashboard'])->name('imagedashboard');
Route::get('/',[HomeController::class,'welcome'])->name('welcome');
Route::get('/Art',[HomeController::class,'Art'])->name('Art');
Route::get('/Tecnology',[HomeController::class,'Tecnology'])->name('Tecnology');
Route::get('/Travel',[HomeController::class,'Travel'])->name('Travel');
Route::get('/Sport',[HomeController::class,'Sport'])->name('Sport');







