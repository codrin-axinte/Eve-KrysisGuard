<?php

Route::group(['as' => 'news.', 'prefix' => 'news', 'namespace' => '\\News\\Http\\Controllers\\'], function(){
	Route::get('/',  'NewsController@index')->name('news.index');
	Route::post('/', 'NewsController@store')->name('news.store');
	Route::put('/{post}', 'NewsController@store')->name('news.update');
	Route::delete('/{post}', 'NewsController@store')->name('news.destroy');
});
