<?php

Route::group(['middleware' => ['web']], function(){
	Route::get('/', 'PagesController@index');
	Route::post('/', 'PostsController@add');
	Route::get('search', 'PostsController@search');
	Route::get('news', 'PagesController@news');
	Route::get('aboutus', 'PagesController@aboutus');
	Route::get('post', 'PagesController@post');
	Route::post('post', 'RepliesController@add');
	Route::get('ratepostasuseful', 'PostsController@ratepostasuseful');
	Route::get('ratepostasnotuseful', 'PostsController@ratepostasnotuseful');
	Route::get('ratereplyasuseful', 'PostsController@ratereplyasuseful');
	Route::get('ratereplyasnotuseful', 'PostsController@ratereplyasnotuseful');
	Route::get('category/{cat}', 'PagesController@category');
	Route::get('register', 'PagesController@register');
	Route::get('login', 'PagesController@login');
	Route::post('login', 'UsersController@login');
	Route::post('register', 'UsersController@register');
	Route::get('logout', 'UsersController@logout');
});
