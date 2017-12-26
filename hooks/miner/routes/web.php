<?php

Route::group([
    'prefix' => 'miner',
    'as' => 'miner.'    
], function(){
    $namespace = '\\Miner\\Http\\Controllers\\';
    Route::get('/ores', $namespace . 'OreController@index')->name('ores.index');

    Route::get('/table', $namespace . 'OreController@table')->name('ores.table');

});
