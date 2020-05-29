<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

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
Route::get('/home', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('ContactUs');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/privacy', function () {
    return view('privacy');
});
Route::get('/disclaimer', function () {
    return view('disclaimer');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/konfirmasi', function () {
    return view('konfirmasi');
});
Route::get('/pembayaran', function () {
    return view('pembayaran');
});
// Route::get('/profile/edit', function () {
//     return view('edit');
// });


// route blog
Route::get('/about', 'BlogController@about');
Route::get('/disclaimer', 'BlogController@disclaimer');
Route::get('/privacy', 'BlogController@privacy');
Route::get('/register', 'BlogController@register');
Route::get('/login', 'BlogController@login');
Route::get('/profile', 'BlogController@profile');
Route::get('/konfirmasi', 'BlogController@konfirmasi');
Route::get('/pembayaran', 'BlogController@pembayaran');
Route::get('/edit', 'BlogController@edit');

//Rout upload Profile
// Route::get('/upload', 'BlogController@upload');
// Route::post('/upload/proses', 'BlogController@proses_upload');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post', 'BlogController@post');
Route::post('/insert', 'BlogController@insert');
Route::get('/barang', 'BlogController@barang');

//Update User Profile
Route::patch('/edit', 'BlogController@update');