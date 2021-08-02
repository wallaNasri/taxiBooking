<?php

use Illuminate\Support\Facades\Route;
use Stevebauman\Location\Facades\Location;
use GoogleMaps\GoogleMaps;

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


Route::get('font','Font\HomeController@index')->name('font');
Route::get('font/show','Font\VeichleController@show')->name('veichle.show');

Route::get('font/cart/{id}','Font\CartController@store')->name('cart');
Route::get('font/info','Font\CartController@index')->name('info');

Route::post('font/info','Font\OrderController@store')->name('info.store');
Route::get('font/my','Font\MaccountController@index')->name('my-account');

Route::view('/ch','font.choose')->name('choose');





Route::get('/dashboard', function () {
    return view('layouts.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::resource('admin/cities','Admin\CityController');
Route::resource('admin/areas','Admin\AreaController');
Route::resource('admin/profiles','Admin\ProfileController');
Route::resource('admin/brands','Admin\BrandController');
Route::resource('admin/carmodels','Admin\CarmodelController');
Route::resource('admin/veichles','Admin\VeichlesController');
Route::resource('admin/drivers','Admin\DriversController');
Route::resource('admin/roles','Admin\RolesController');
Route::resource('admin/wallets','Admin\WalletsController');

Route::get('details', function () {

	$ip = request()->ip();
    $location =Location::get('$ip');
    dd($location);

});


Route::get('dir','AutoAddressController@googleAutoAddress')->name('dir');
Route::post('direction','Font\DirectionController@store')->name('direction');

Route::get('font/payment','Font\paymentController@store')->name('payment');

Route::view('font/contact','font.contact')->name('contact');
Route::view('font/taxi','font.taxi')->name('taxi');
Route::view('font/services','font.services')->name('services');
Route::view('font/about','font.about')->name('about');









