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
    return view('master');
});

Route::get('/laporkomunitas', function () {
    return view('modul.pelaporan.index');
});

Route::get('/dokter', function () {
    return view('modul.pelaporan.dokter');
});

Route::get('/komunitas', function () {
    return view('modul.komunitas.index');
});

Route::get('/event', function () {
    return view('modul.event.index');
});

Route::get('/profilteman', function () {
    return view('modul.user.detailprofilteman');
});

Route::get('/detailprofilku', function () {
    return view('modul.user.detailprofilku');
});

Route::get('/editprofil', function () {
    return view('modul.user.editprofil');
});

Route::get('/info', function () {
    return view('modul.setting.info');
});
Route::get('/gantipassword', function () {
    return view('modul.setting.gantipassword');
});
Route::get('/login', function () {
    return view('modul.signinup.login');
});
Route::get('/daftar', function () {
    return view('modul.signinup.daftar');
});
Route::get('/automatch', function () {
    return view('modul.automatch.automatch');
});


