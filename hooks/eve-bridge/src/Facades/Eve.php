<?php


namespace EveBridge\Facades;


use Illuminate\Support\Facades\Facade;

class Eve extends Facade {

	protected static function getFacadeAccessor() {
		return 'eve';
	}


}