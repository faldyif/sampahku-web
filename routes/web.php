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
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/admin/user', function () {
    return view('admin.user.index');
});
Route::get('/admin/reward', function () {
    return view('admin.reward.index');
});
// Route::get('/edit', function () {
//     return view('user.edit');
// });
Route::get('/admin/pointHistory', function () {
    return view('admin.pointHistory.index');
});

Route::resource('admin/user','UserController');
Route::resource('admin/reward','RewardsController');
Route::resource('admin/pointHistory','PointHistoriesController');
Route::resource('admin/stories','StoriesController', ['only' => [
        'index'
    ]]);


Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');


// API Controller
Route::group(['prefix' => 'api/v1'], function () {
	Route::post('/login', 'ApiAuthController@login');
	Route::post('/register', 'ApiAuthController@register');

	Route::post('/trash/all', 'ApiTrashController@get');
});

