<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CalculatorController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('MyPages.index');
})-> name('index');

Route::get('/gallery', function () {
    return view('MyPages.gallery');
})-> name('gallery');

Route::get('/services', function () {
    return view('MyPages.services');
})-> name('services');

Route::get('/calculator', [CalculatorController::class, 'showCalculatorPage']);




Route::get('/steve', function (){
    return view('fischer');
})->name('fischer');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
