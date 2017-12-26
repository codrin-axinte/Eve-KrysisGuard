<?php
$namespace = '\\EveBridge\\Http\\Controllers\\';
Route::group(['as' => 'eve.', ], function() use($namespace){
	Route::get('/login', $namespace . 'LoginController@redirectToProvider')->name('auth.login');
	Route::get('/login/callback', $namespace . 'LoginController@handleProviderCallback')->name('auth.callback');
	Route::get('/logout', $namespace .'LoginController@logout')->name('auth.logout')->middleware('auth');
});
