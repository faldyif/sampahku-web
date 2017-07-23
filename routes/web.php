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
Route::get('/admin/user/detail/{id}', function () {
    return view('admin.user.detail');
});
// Route::get('/edit', function () {
//     return view('user.edit');
// });
Route::get('/admin/pointHistory', function () {
    return view('admin.pointHistory.index');
});

Route::resource('admin/user','UserController');
Route::get('admin/user/destroy/{id}','UserController@destroy');
Route::resource('admin/reward','RewardsController');
Route::get('admin/reward/destroy/{id}','RewardsController@destroy');
Route::resource('admin/rewardHostory','RewardHistoriesController');
Route::resource('admin/pointHistory','PointHistoriesController');
Route::resource('admin/story','StoriesController');
Route::resource('admin/trashType','TrashTypeController');
Route::get('admin/trashType/destroy/{id}','TrashTypeController@destroy');
Route::resource('admin/userTrueReport','UserTrueReportsController');
Route::get('admin/userTrueReport/destroy/{id}','UserTrueReportsController@destroy');
Route::resource('admin/userFalseReport','UserFalseReportsController');
Route::get('admin/userFalseReport/destroy/{id}','UserFalseReportsController@destroy');
Route::resource('admin/trash','TrashesController');
Route::get('admin/trash/destroy/{id}','TrashController@destroy');
Route::resource('admin/rewardHistory','RewardHistoriesController');
Route::get('admin/rewardHistory/destroy/{id}','RewardHistoriesController@destroy');
//
// Route::get('/apitrash', 'ApiTrashController@app');
Auth::routes();

Route::get('/home', 'HomeController@index');


// API Controller
Route::group(['prefix' => 'api/v1'], function () {
	Route::post('/login', 'ApiAuthController@login');
	Route::post('/register', 'ApiAuthController@register');

	Route::post('/trash/all', 'ApiTrashController@get');
	Route::post('/trash/new', 'ApiTrashController@add');

  Route::post('/admin/trashType/new', 'TrashTypeController@add');
});
