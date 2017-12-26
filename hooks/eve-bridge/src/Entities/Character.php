<?php


namespace EveBridge\Entities;
use Carbon\Carbon;
use Illuminate\Support\Fluent;

/**
 * Class Character
 *
 * @package EveBridge\Entities
 * @property $corporation_id
 * @property $birthday
 * @property $name
 * @property $gender
 * @property $race_id
 * @property $description
 * @property $bloodline_id
 * @property $ancestry_id
 */
class Character extends Fluent {

	public function birthday() {
		return new Carbon($this->birthday);
	}

}