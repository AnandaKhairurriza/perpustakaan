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

Route::get('/', ['as' => 'home', 'uses' => 'App\Http\Controllers\Perpustakaan@index']);

Route::get('/pinjam-buku', ['as' => 'pinjam-buku', 'uses' => 'App\Http\Controllers\Perpustakaan@pinjam']);

Route::post('/input-pinjam', ['as' => 'input-pinjam', 'uses' => 'App\Http\Controllers\Perpustakaan@update']);