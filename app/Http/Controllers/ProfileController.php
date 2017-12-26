<?php namespace App\Http\Controllers;

use App\User;

/**
 * Class CharacterController
 *
 * @package EveBridge\Http\Controllers
 */
class ProfileController extends AccountController {

	public function about(User $user = null) {
		if(!$user){
			$user = auth()->user();
		}
		$character = \Eve::character($user->providerAccountId());
		return view('account.about', compact('character', 'user'));
	}


}