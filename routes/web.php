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

// Home view
Route::get('/', function () {
    return view('welcome');
});

// Give security for logged user (admins) only
Route::group(['prefix' => 'admin'], function () {
	Route::group(['middleware' => 'auth'], function () {
		// Root folder
		Route::get('/', function () {
			if(Auth::user()->role == 0) {
		    	return view('admin.index');
			} else {
				Auth::logout();
		        return redirect('/');
			}
		});

		// Route resources and gets
		Route::resource('user','UserController');
		Route::get('user/destroy/{id}','UserController@destroy');
		Route::resource('reward','RewardsController');
		Route::get('reward/destroy/{id}','RewardsController@destroy');
		Route::resource('rewardHostory','RewardHistoriesController');
		Route::resource('pointHistory','PointHistoriesController');
		Route::resource('story','StoriesController');
		Route::resource('trashType','TrashTypeController');
		Route::get('trashType/destroy/{id}','TrashTypeController@destroy');
		Route::resource('userTrueReport','UserTrueReportsController');
		Route::get('userTrueReport/destroy/{id}','UserTrueReportsController@destroy');
		Route::resource('userFalseReport','UserFalseReportsController');
		Route::get('userFalseReport/destroy/{id}','UserFalseReportsController@destroy');
		Route::resource('trash','TrashController');
		Route::get('trash/destroy/{id}','TrashController@destroy');
		Route::resource('rewardHistory','RewardHistoriesController');
		Route::get('rewardHistory/destroy/{id}','RewardHistoriesController@destroy');
	});
});

// Authentication Routes
Auth::routes();

// Home route, check if the user is admin or not after logged in
Route::get('/home', function() {
	if(Auth::user()->role == 0) {
        return redirect('admin');
	} else {
		Auth::logout();
        return redirect('/');
	}
});


// API Controller
Route::group(['prefix' => 'api/v1'], function () {
	Route::post('/login', 'ApiAuthController@login');
	Route::post('/register', 'ApiAuthController@register');

	Route::post('/trash/all', 'ApiTrashController@get');
	Route::post('/trash/new', 'ApiTrashController@add');
	Route::post('/trash/type', 'ApiTrashController@getTrashTypes');

	Route::post('/story/new', 'ApiStoryController@add');
});
