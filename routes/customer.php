<?php

use App\Livewire\Admin\Ux\Dashboard;
use Illuminate\Support\Facades\Route;

Route::prefix('/customer')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('customer.dashboard');
    Route::get('/routers', \App\Livewire\Admin\Ux\Router::class)->name('customer.routers');
});
