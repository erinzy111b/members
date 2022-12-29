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

Route::resource('/', 'App\Http\Controllers\MemberController');
Route::group(['namespace' => 'App\Http\Controllers'],
    function () {
        Route::post('createstore', 'MemberController@store')->name('createstore');
        Route::post('editupdate', 'MemberController@editupdate')->name('editupdate');
    });

Route::get('/', function () {return view('index');});
Route::get('/index', function () {return view('index');});
Route::get('/create', function () {return view('create');});
Route::get('/update', function () {return view('update');});
Route::post('/update', function () {return view('update');});
Route::get('/delete', function () {return view('delete');});
Route::post('/delete', function () {return view('delete');});
Route::post('/deletemany', function () {return view('deletemany');});
