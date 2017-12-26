<?php


namespace EveBridge\Entities;


use App\User;
use Illuminate\Database\Eloquent\Model;

class ProviderAccount extends Model {
	protected $table = 'provider_accounts';

	protected $fillable = [
		'user_id',
		'provider_user_id',
		'token',
	];

	public function user() {
		return $this->belongsTo(User::class);
	}
}