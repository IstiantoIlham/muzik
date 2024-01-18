<?php

use Illuminate\Support\Facades\Route;

Route::controller(App\Http\Controllers\AdminController::class)->group(function () {
    Route::get('login', 'login')->name('login.page');
    Route::post('loginForm', 'loginForm')->name('login.form');
    Route::get('admin', 'index')->name('admin.page')->middleware('auth');
});

Route::controller(App\Http\Controllers\MusicController::class)->group(function () {
    Route::get('/', 'index')->name('music.index');
    Route::get('create', 'create')->name('music.create');
    Route::post('/', 'store')->name('music.store');
    Route::get('{music}', 'show')->name('music.show');
    Route::get('edit/{music}', 'edit')->name('music.edit');
    Route::put('{music}', 'update')->name('music.update');
    Route::delete('{music}', 'destroy')->name('music.destroy');
});


