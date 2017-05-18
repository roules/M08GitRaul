<?php
/**
* Aquest fitxer conté les rutes.
*
* En aquest fitxer podem trobar les rutes que ens redirigiran a funcions, controladors o vistes concretes.
*
* @package routes
* @author Raúl <raul@gmail.com>
* @license GPL
*/

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
    return redirect('/home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/nosaltres', function () {
    return view('nosaltres');
});

Route::get('/pressupost', function () {
    return view('pressupost');
});

Route::get('/tatuadors', function () {
    return view('tatuadors');
});

Route::get('/cercador', function () {
    return view('cercador');
});

Route::get('/contact', function () {
    return view('about/contact');
});

Route::post('/contact', 'ContactController@contacta');
