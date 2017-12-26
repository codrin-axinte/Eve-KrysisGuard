<?php


namespace News\Facades;


use Illuminate\Support\Facades\Facade;

class News extends Facade {

	protected static function getFacadeAccessor() {
		return 'News';
	}

}