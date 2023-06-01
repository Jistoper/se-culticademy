<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', function(){
    return view('auth.login');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

// admin route
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function(){
    // admin dashboard route
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    // admin category route
    Route::resource('/category', CategoryController::class);
});