<?php namespace EveBridge\Http\Controllers;

use App\Http\Controllers\Controller;

use Auth;
use EveBridge\Facades\Eve;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Laravel\Socialite\Two\User;
use Socialite;
/**
 * Class EveAuthController
 *
 * @package EveBridge\Http\Controllers
 */
class LoginController extends Controller {

	public function logout(Request $request) {
		$this->guard()->logout();
		$request->session()->invalidate();

		return redirect(url('/'));
	}

	public function redirectToProvider() {
		return Socialite::driver('eve')->redirect();
	}

	public function handleProviderCallback() {
		// Get the user data from eve sso
		$providerUser = Socialite::driver( 'eve' )->user();

		// Check if user is part of the corporation
		$this->checkUserCorporation($providerUser->getId());

		// Persist account
		$user         = \Eve::createOrGetUser( $providerUser );

		// Login with the current account
		auth()->login($user);

		//\Session::flash('message', 'User logged in!');

		// Redirect home
		return redirect(url('/'));
    }

	/**
	 * @param $characterId
	 *
	 */
	protected function checkUserCorporation($characterId) {
		$corp_id = setting('eve.corp_id');
		if(!$corp_id)
			return;

		if(Eve::character($characterId)->corporation_id != $corp_id)
			abort(401,'You are not part of the corporation. You are not allowed to see the content.');
    }

	/**
	 * Get the guard to be used during authentication.
	 *
	 * @return \Illuminate\Contracts\Auth\StatefulGuard
	 */
	protected function guard()
	{
		return Auth::guard();
	}
}
