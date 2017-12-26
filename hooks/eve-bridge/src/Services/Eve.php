<?php


namespace EveBridge\Services;


use App\User;
use EveBridge\Entities\Character;
use EveBridge\Entities\ProviderAccount;
use GuzzleHttp\Client;
use Laravel\Socialite\Two\User as ProviderUser;
use Socialite;

class Eve {

	private $url = 'https://esi.tech.ccp.is/latest/%s/%s/?datasource=';
	/**
	 * @var Client
	 */
	private $client;

	/**
	 * Eve constructor.
	 *
	 * @param Client $client
	 * @param string $dataSource
	 */
	public function __construct( Client $client, $dataSource = 'tranquility' ) {
		$this->url .= $dataSource;
 		$this->client = $client;
	}

	/**
	 * Load the web routes file
	 */
	public function loadRoutes() {
		require __DIR__ . '/../../routes/web.php';
	}

	/**
	 * @return EveDriver
	 */
	public function driver() {
		return Socialite::driver('eve');
	}

	/**
	 * @param ProviderUser $providerUser
	 * @return User
	 */
	public function createOrGetUser(ProviderUser $providerUser ) {
		// Search an account by the provider user id
		$account = ProviderAccount::whereProviderUserId( $providerUser->getId())->first();
		// If there is an account, return the user associated with it
		if($account){
			if($account->token != $providerUser->token){
				$account->token = $providerUser->token;
				$account->save();
			}

			return $account->user;
		}

		// Create new provider account with the provider user id
		$account = new ProviderAccount( [ 'provider_user_id' => $providerUser->getId(), 'token' => $providerUser->token]);
		// First search for an existing user with the provider username
		$user = User::whereUsername($providerUser->getNickname())->first();
		//TODO:: Also set role according to the corporation
		// If a user was not found, create a new one with the provided details
		if(!$user){
			$user = User::create(
				[
					'username' => $providerUser->getNickname(),
					'name' => $providerUser->getName(),
					'password' => bcrypt(str_random()),
					'avatar' => $providerUser->getAvatar(),
				]);
		}

		// Associate the created user to the create provider account
		$account->user()->associate($user);
		$account->save();
		return $user;
	}

	/**
	 * Return the character public profile information
	 *
	 * @param $characterId
	 * @return Character
	 */
	public function character($characterId) {
		$data =  $this->driver()->json($this->url('characters', $characterId));
		return new Character($data);
	}

	public function skills( $characterId = null, $token = null ) {
		if(empty($characterId)){
			$user = $this->getCurrentUser();
			$characterId = $user['characterId'];
			$token = $user['token'];
		}
		$uri     = $this->url( 'characters', $characterId .'/skills');
		$data = $this->driver()->authRequest($uri, $token);
		return $data;
	}

	protected function getCurrentUser() {
		if(!auth()->check()){
			return [];
		}
		return [
			'characterId' =>  auth()->user()->providerAccountId(),
			'token' => auth()->user()->token(),
		];
	}

	public function assets( $characterId, $token ) {
		$uri      = $this->url( 'characters', $characterId . '/assets' );
		$data = $this->driver()->authRequest($uri, $token);
		return $data;
	}

	public function avatar( $characterId, $size = 128 ) {
		return sprintf( 'https://imageserver.eveonline.com/Character/%s_%s.jpg', $characterId, $size);
	}

	/**
	 * @param string $segment
	 * @param array|mixed|null $params
	 * @return string
	 */
	protected function url( $segment, $params = null ) {
		return sprintf($this->url, $segment, $params);
	}

	protected function getSourceUrl( $segment, $relative, $source = 'tranquility' ) {
		return sprintf('https://esi.tech.ccp.is/latest/%s/%s/?datasource=%s', $segment, $relative, $source);
	}

}