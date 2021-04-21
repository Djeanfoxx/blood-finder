<?php

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
    return view('auth.login');
});

Route::get('/blood-type/{blood_type}', 'BloodTypeController@index'); // facilities

Route::get('/reservation/{location}/{bloodtype}', 'ReservationController@create');
Route::post('/reservation/confirm_reservation', 'ReservationController@store');


Route::get('/user/profile/{id}', 'UserController@edit');
Route::post('/user/profile/{id}/update', 'UserController@update');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/admin', 'admin\LoginController@index');

Route::post('/admin/login', 'admin\LoginController@login')->name('admin.login');
Route::get('/admin/home', 'admin\LoginController@home')->name('admin.home');

Route::get('/admin/register', 'admin\RegisterController@create');
Route::post('/admin/confirm_registration', 'admin\RegisterController@store');

Route::get('/admin/bloodrecord', 'admin\BloodRecordController@index');
Route::get('/admin/live/quantity/{location_id}/{blood_id}', 'admin\BloodRecordController@live_count');

Route::post('/admin/bloodrecord/add', 'admin\BloodRecordController@store');
Route::get('/admin/bloodrecord/delete/{location_id}/{blood_id}', 'admin\BloodRecordController@custom_destroy');

Route::get('/admin/cancelreservation', 'admin\CancelReservationController@index');
Route::get('/admin/cancellation/{id}', 'admin\CancelReservationController@custom_destroy');



// Route::get('/admin/1-register-admin', function () {
//     return view('1-register-admin');
// });

// Route::get('/admin/2-login-admin', function () {
//     return view('2-login-admin');
// });

// Route::get('/admin/3-controls-admin', function () {
//     return view('3-controls-admin');
// });

// Route::get('/admin/4-cancelreservation-admin', function () {
//     return view('4-cancelreservation-admin');
// });

// Route::get('/admin/5-add-admin', function () {
//     return view('5-add-admin');
// });

// Route::get('/admin/6-updatebloodrecords-admin', function () {
//     return view('6-updatebloodrecords-admin');
// });
