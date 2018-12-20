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
Route::group(['namespace' => 'Guest'], function() {
    Route::get('/','HomeController@getHome');

    Route::post('loadmore','HomeController@loadMore');

    Route::get('danh-muc/{slug}/{id}','HomeController@getCategory');

    Route::get('bai-viet/{slug}/{id}','HomeController@getDetail');

    Route::get('tim-kiem','HomeController@getSearch');
});

Route::group(['namespace' => 'Admin'], function() {

	Route::group(['prefix' => 'login', 'middleware' => 'CheckLoggedIn'], function() {
		Route::get('/','LoginController@getLogin');
		Route::post('/','LoginController@login');
	});

	Route::group(['prefix' => 'admin', 'middleware' => 'CheckLoggedOut'], function() {
		Route::get('logout','AdminController@getLogOut');

		Route::get('/','AdminController@getBlank');
		Route::get('home','AdminController@getHome');

		Route::group(['prefix' => 'user','middleware' => 'CheckAdmin'], function() {
		    Route::get('/','UserController@getUser');
		    Route::get('add','UserController@getAddUser');
		    Route::post('add','UserController@postAddUser');
		    Route::get('edit/{id}','UserController@getEditUser');
		    Route::post('edit/{id}','UserController@postEditUser');
		    Route::get('delete/{id}','UserController@getDeleteUser');
		});

		Route::group(['prefix' => 'article'], function() {
		    Route::get('/','ArticleController@getArticle');
		    Route::get('add','ArticleController@getAddArticle');
		    Route::post('add','ArticleController@postAddArticle');
		    Route::get('edit/{id}','ArticleController@getEditArticle');
		    Route::post('edit/{id}','ArticleController@postEditArticle');
		    Route::get('delete/{id}','ArticleController@getDeleteArticle');
            Route::post('change-order/{stt}','ArticleController@handleChangeOrder');
		});

		Route::group(['prefix' => 'category'], function() {
		    Route::get('/','CategoryController@getCategory');
		    Route::get('add','CategoryController@getAddCategory');
		    Route::post('add','CategoryController@postAddCategory');
		    Route::get('edit/{id}','CategoryController@getEditCategory');
		    Route::post('edit/{id}','CategoryController@postEditCategory');
		    Route::get('delete/{id}','CategoryController@getDeleteCategory');
		});
	});

});

