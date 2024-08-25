<?php

use App\Livewire\Socialauth;
use Illuminate\Support\Facades\Route;
use App\Livewire\Soucialauth;


Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/auth', Socialauth::class);


require __DIR__.'/auth.php';
