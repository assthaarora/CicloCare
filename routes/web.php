<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

*/

    // Route::get('/', function () {
    //     return view('welcome');

    // });
// Route::resource('/form', [App\Http\Controllers\HomePageController::class]);
Route::get('/form', [App\Http\Controllers\HomePageController::class, 'index']);
Route::post('/form', [App\Http\Controllers\HomePageController::class, 'store'])->name('form.store');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Auth::routes();

Route::get('/users_profile', [App\Http\Controllers\PatientController::class, 'users_profile'])->name('users_profile');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/new_prescription', [App\Http\Controllers\HomeController::class, 'new_prescription'])->name('new_prescription');
Route::get('/my_prescription', [App\Http\Controllers\HomeController::class, 'my_prescription'])->name('my_prescription');
Route::get('/order_management', [App\Http\Controllers\HomeController::class, 'order_management'])->name('order_management');
Route::get('/subscription_management', [App\Http\Controllers\HomeController::class, 'subscription_management'])->name('subscription_management');
Route::get('/users_profile', [App\Http\Controllers\PatientController::class, 'users_profile'])->name('users_profile');