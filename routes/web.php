<?php

use Illuminate\Support\Facades\Route;
use Stevebauman\Location\Facades\Location;
use alexpechkarev\GoogleMaps\ServiceProvider\GoogleMapsServiceProvider;
use alexpechkarev\GoogleMaps\Facade\GoogleMapsFacade;
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


Route::get('font','Font\HomeController@index');
Route::get('font/show/{id}','Font\VeichleController@show')->name('veichle.show');



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

Route::get('google', function(){
    $config = array();
    $config['center'] = 'auto';
    $config['onboundschanged'] = 'if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
            });
        }
        centreGot = true;';

    app('map')->initialize($config);

    // set up the marker ready for positioning
    // once we know the users location
    $marker = array();
    app('map')->add_marker($marker);

    $map = app('map')->create_map();
    echo "<html><head><script >var centreGot = false;</script>".$map['js']."</head><body>".$map['html']."</body></html>";
});


Route::get('dir','AutoAddressController@googleAutoAddress');











