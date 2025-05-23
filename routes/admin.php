<?php


use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->group(function () {
    Route::get('/users', \App\Livewire\Admin\Users::class)->name('admin.users');
    Route::get('/customers', \App\Livewire\Admin\Customers::class)->name('admin.customers');
    Route::get('router', \App\Livewire\Admin\Router\RouterDetails::class)->name('admin.router');

});
