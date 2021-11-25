<?php

use App\Http\Controllers\Admin\AreaController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\AddcompanyController;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\FinancialController;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::view('/', 'public.home');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/delivery', [DeliveryController::class, 'index'])->name('admin.delivery');

    Route::get('/terms/edit', [TermsController::class, 'edit'])->name('admin.terms.edit');
    Route::get('/terms/show', [TermsController::class, 'show'])->name('admin.terms.show');
    Route::get('/privacy/edit', [PrivacyController::class, 'edit'])->name('admin.privacy.edit');
    Route::get('/privacy/show', [PrivacyController::class, 'show'])->name('admin.privacy.show');


    Route::get('/terms/edit', [TermsController::class, 'edit'])->name('admin.terms.edit');
    Route::get('/terms/show', [TermsController::class, 'show'])->name('admin.terms.show');
    Route::get('/privacy/edit', [PrivacyController::class, 'edit'])->name('admin.privacy.edit');
    Route::get('/privacy/show', [PrivacyController::class, 'show'])->name('admin.privacy.show');
    Route::get('/terms/edit', [TermsController::class, 'edit'])->name('admin.terms.edit');
    Route::get('/terms/show', [TermsController::class, 'show'])->name('admin.terms.show');
    Route::get('/privacy/edit', [PrivacyController::class, 'edit'])->name('admin.privacy.edit');
    Route::get('/privacy/show', [PrivacyController::class, 'show'])->name('admin.privacy.show');
    Route::get('/message', [MessageController::class, 'message'])->name('admin.message');
    Route::resource('products', ProductController::class);

    Route::get('/financial', [FinancialController::class, 'index'])->name('admin.financial');
    Route::view('sales', 'admin.Fin.sales')->name('sales');
    Route::view('profite', 'admin.Fin.profite')->name('profite');
    Route::view('activearea', 'admin.Fin.activearea')->name('activearea');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::view('table-list', 'pages.table_list')->name('table');
    Route::view('typography', 'pages.typography')->name('typography');
    Route::view('icons', 'pages.icons')->name('icons');
    Route::view('map', 'pages.map')->name('map');
    Route::view('notifications', 'pages.notifications')->name('notifications');
    Route::view('rtl-support', 'pages.language')->name('language');
    Route::view('upgrade', 'pages.upgrade')->name('upgrade');
    Route::view('finance', 'admin.dashbord.financial');
});


Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', UserController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('carts', CartController::class);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::get('admin/product/index', [AdminController::class, 'index'])->name('admin.index');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('countries', CountryController::class);
    Route::resource('cities', CityController::class);
    Route::resource('areas', AreaController::class);
});

Route::get('/message', [MessageController::class, 'message'])->name('message');
Route::post('/message', [LetterController::class, 'store']);
