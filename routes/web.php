<?php

use Illuminate\Support\Facades\Route;

Route::controller(App\Http\Controllers\AdminController::class)->group(function () {
    Route::get('login', 'login')->name('login.page');
    Route::post('loginForm', 'loginForm')->name('login.form');
    Route::get('admin', 'index')->name('admin.index')->middleware('auth');
    Route::get('edit/{music}', 'edit')->name('music.edit')->middleware('auth');
    Route::get('create', 'create')->name('music.create')->middleware('auth');
    Route::post('/', 'store')->name('music.store')->middleware('auth');
    Route::delete('delete/{music}', 'destroy')->name('music.destroy')->middleware('auth');
    Route::put('{music}', 'update')->name('music.update')->middleware('auth');
});

Route::controller(App\Http\Controllers\MusicController::class)->group(function () {
    Route::get('/', 'index')->name('music.index');
    Route::get('{music}', 'show')->name('music.show');
});


