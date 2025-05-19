<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Livewire\ShowHomePage;
use App\Livewire\ShowAbout;
use App\Livewire\ShowProfile;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', ShowHomePage::class)->name('home');
Route::get('/about', ShowAbout::class)->name('about');
Route::get('/profile', ShowProfile::class)->name('profile');
use App\Http\Controllers\CustomerController;

Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');
Route::post('/customer/buy', [CustomerController::class, 'buy'])->name('customer.buy');
Route::get('/customer/receipt/{id}', [CustomerController::class, 'receipt'])->name('customer.receipt');

