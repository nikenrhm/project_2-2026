<?php
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

use App\Livewire\HomePage;
use App\Livewire\NewCarsPage;
use App\Livewire\UsedCarsPage;
use App\Livewire\CarDetailPage;
use App\Livewire\SpecialRequestPage;
use App\Livewire\SellYourCarPage;
use App\Livewire\ServiceCenterPage;
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


Route::get('/', HomePage::class);

Route::get('/cars/new', NewCarsPage::class);

Route::get('/cars/used', UsedCarsPage::class);

Route::get('/cars/{slug}', CarDetailPage::class);

Route::get('/special-request', SpecialRequestPage::class);

Route::get('/sell-your-car', SellYourCarPage::class);

Route::get('/service-center', ServiceCenterPage::class);

Route::view('/contact', 'contact')->name('contact');