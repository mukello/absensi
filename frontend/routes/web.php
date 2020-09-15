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

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});
Route::resource('/', 'IndexController');

Auth::routes();

Route::resource('/home', 'HomeController', ['as' => 'home'])->middleware(['auth']);
Route::resource('/attandance', 'SysAttendanceController', ['as' => 'attandance'])->middleware(['auth']);
Route::resource('/settings', 'SettingController', ['as' => 'settings'])->middleware(['auth']);

Route::post('settings-profile/image', 'ProfileController@imageUpload')->name('profile.image');
Route::post('settings-profile/show-image', 'ProfileController@showImage')->name('profile.show-image');

Route::post('settings-profile/ktp', 'ProfileController@ktpUpload')->name('profile.ktp');
Route::post('settings-profile/show-ktp', 'ProfileController@showKTP')->name('profile.show-ktp');

Route::post('settings-profile/kk', 'ProfileController@kkUpload')->name('profile.kk');
Route::post('settings-profile/show-kk', 'ProfileController@showKK')->name('profile.show-kk');


Route::resource('/profile', 'ProfileController', ['as' => 'profile'])->middleware(['auth']);
Route::get('/change-password', 'ProfileController@changePassword')->name('profile.changePassword');
Route::post('/action-change-password', 'ProfileController@actionPassword')->name('profile.actionPassword');

Route::post('/check-password', 'ProfileController@checkPassword')->name('profile.checkPassword');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');