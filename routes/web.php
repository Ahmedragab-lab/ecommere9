<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::view('/','home')->name('home.index');

Route::middleware('auth')->group(function () {
    // Route::view('/home','home')->name('home.index');

});

Route::middleware(['auth','admin'])->group(function () {


});


require __DIR__.'/auth.php';
