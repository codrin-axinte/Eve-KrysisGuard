<?php


namespace App\Http\Controllers;


use App\User;

abstract class AccountController extends Controller {

	/**
	 * @var User
	 */
	protected $user;

	/**
	 * AccountController constructor.
	 */
	public function __construct() {
		$this->middleware('auth');
	}
}