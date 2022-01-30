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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test2', function () {
    return view('admin.newsletter.index');
});
Route::get('/test5', function () {
    return view('admin.newsletter.index2');
});
Route::get('/test3', function () {
    return view('login-test');
});
Route::get('/test4', function () {
    return view('landing-page');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/test', function () {
    return view('dashboard2');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('newsletter')->name('newsletter.')->group(function () {
    Route::get('/subscribe',[App\Http\Controllers\NewsletterController::class,'subscribe'])->name('subscribe');
    Route::post('/store',[App\Http\Controllers\NewsletterController::class,'store'])->name('store');
    Route::get('/create',[App\Http\Controllers\NewsletterController::class,'createCampaign'])->name('create');

});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
