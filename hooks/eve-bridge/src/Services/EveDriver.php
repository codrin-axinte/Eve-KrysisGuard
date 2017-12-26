<?php


namespace EveBridge\Services;

use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Str;
use Laravel\Socialite\Two\AbstractProvider;
use Laravel\Socialite\Two\ProviderInterface;
use Laravel\Socialite\Two\User;

/**
 * Class EveClient
 *
 * @package EveBridge\Services
 */
class EveDriver extends AbstractProvider implements ProviderInterface {

	protected $scopeSeparator = ' ';
	protected $scopes = [
		'publicData',
		'characterStatsRead',
		'characterFittingsRead',
		'characterFittingsWrite',
		'characterContactsRead',
		'characterContactsWrite',
		'characterLocationRead',
		'characterWalletRead',
		'characterAssetsRead',
		'characterCalendarRead',
		'characterFactionalWarfareRead',
		'characterKillsRead',
		'characterMailRead',
		'characterNotificationsRead',
		'characterSkillsRead',
		'characterAccountRead',
		'characterContractsRead',
		'characterChatChannelsRead',
		'corporationFactionalWarfareRead',
		'corporationKillsRead',
		'fleetWrite',
		'esi-assets.read_assets.v1',
		'esi-skills.read_skills.v1',
		//'esi-skills.read_skillqueue.v1',
		'esi-fittings.read_fittings.v1',
		//'esi-industry.read_character_mining.v1'
	];

	protected function getAuthUrl( $state ) {
		return $this->buildAuthUrlFromBase( 'https://login.eveonline.com/oauth/authorize', $state );
	}

	protected function getTokenUrl() {
		return 'https://login.eveonline.com/oauth/token';
	}

	protected function getUserByToken( $token ) {
		$response = $this->getHttpClient()
		                 ->get( 'https://login.eveonline.com/oauth/verify', $this->getRequestOptions( $token ) )
		;

		return json_decode( $response->getBody(), true );
	}

	protected function mapUserToObject( array $user ) {
		return ( new User() )->setRaw( $user )->map(
			[
				'id'       => $user['CharacterID'],
				'name'     => $user['CharacterName'],
				'nickname' => Str::studly( $user['CharacterName'] ),
				'avatar'   => \Eve::avatar( $user['CharacterID'], 512 ),
			] )
			;
	}

	/**
	 * Get the POST fields for the token request.
	 *
	 * @param  string $code
	 * @return array
	 */
	protected function getTokenFields( $code ) {
		return parent::getTokenFields( $code ) + [ 'grant_type' => 'authorization_code' ];
	}

	public function getRequestOptions( $token ) {
		return [
			'headers' => [
				'Accept'        => 'application/json',
				'Authorization' => 'Bearer ' . $token,
			],
		];
	}

	public function request( $url, $method = 'GET', $options = [] ) {
		$options = array_merge([
			                       'headers' => [
				                       'Accept'        => 'application/json',
			                       ]
		                       ], $options);
		return $this->getHttpClient()->request($method, $url, $options);
	}

	public function json( $url, $method = 'GET', $options = [] ) {
		$response = $this->request($url, $method, $options);
		return json_decode($response->getBody(), true);
	}

	public function authRequest( $url, $token, $method = 'GET' ) {
		try{
			$response = $this->getHttpClient()->request($method, $url, $this->getRequestOptions( $token ) );
		} catch (ClientException $exception){
			if($exception->getCode() == 403){
				//Refresh Token

			}else {
				throw $exception;
			}
		}

		$data = json_decode( $response->getBody(), true );

		return $data;
	}

	public function refreshToken() {

	}

}