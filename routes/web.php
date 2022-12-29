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
        Route::post('create_submit', 'MemberController@store');
        Route::get('', 'ItemController@queryPagination');
    });

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/update', function () {
    return view('update');
});

Route::get('/create', function () {
    return view('create');
});

Route::post('/create', function () {
    return view('create');
});
