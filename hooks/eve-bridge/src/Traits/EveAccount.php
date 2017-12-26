<?php namespace EveBridge\Traits;

use EveBridge\Entities\ProviderAccount;

/**
 * Trait EveAccount
 *
 * @package EveBridge\Traits
 */
trait EveAccount {

	public function providerAccount() {
		return $this->hasOne( ProviderAccount::class);
	}

	public function providerAccountId() {
		return $this->providerAccount->provider_user_id;
	}

	public function token() {
		return $this->providerAccount->token;
	}
}