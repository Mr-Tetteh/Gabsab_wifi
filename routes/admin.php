<?php


use App\Livewire\Admin\Customers;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Price\SetPrice;
use App\Livewire\Admin\Router\RouterDetails;
use App\Livewire\Admin\Users;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->group(function () {
    Route::get('dashboard', Dashboard::class)->name('admin.dashboard');
    Route::get('/users', Users::class)->name('admin.users');
    Route::get('/customers', Customers::class)->name('admin.customers');
    Route::get('router', RouterDetails::class)->name('admin.router');
    Route::get('/price', SetPrice::class)->name('admin.price');

});
