<?php


namespace News\Http\Controllers;


class NewsController {

	public function index() {
		return view('news::index');
	}
}