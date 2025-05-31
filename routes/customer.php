<?php

use App\Http\Middleware\EnsureIsCustomer;
use App\Livewire\Admin\Subscription\Subscribe;
use App\Livewire\Admin\Ux\Dashboard;
use App\Livewire\Admin\Ux\Router;
use Illuminate\Support\Facades\Route;

Route::prefix('/customer')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', Dashboard::class)->name('customer.dashboard');
        Route::get('/routers', Router::class)->name('customer.routers');
        Route::get('/subscriptions', Subscribe::class)->name('customer.subscriptions');
    });
});
