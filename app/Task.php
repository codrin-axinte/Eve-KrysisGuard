<?php

namespace App;

use Doctrine\DBAL\Query\QueryBuilder;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Task
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $title
 * @property string $description
 * @property int $votes
 * @property int $completed
 * @property int $category
 * @property string $ip
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task category($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task completed($isCompleted = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereCompleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereVotes($value)
 * @mixin \Eloquent
 */
class Task extends Model
{
	protected $casts = [
		'completed' => 'bool',
	];

	public function getRouteKeyName() {
		return 'slug';
	}


	/**
	 * @param QueryBuilder|Task $query
	 * @param int $value
	 * @return QueryBuilder
	 */
	public function scopeCategory( $query, $value ) {
		return $query->where('category', $value);
    }


    public function user(){
		return $this->belongsTo(User::class);
    }

	/**
	 * @param QueryBuilder $query
	 * @param bool $isCompleted
	 * @return mixed
	 */
	public function scopeCompleted( $query, $isCompleted = true ) {
		return $query->where('completed', $isCompleted);
    }

	public function getExcerptAttribute() {
		return str_limit($this->description, 80);
    }

	public function getPathAttribute() {
		return route('tasks.show',  $this);
    }

	public function getDateAttribute() {
		return $this->created_at->toFormattedDateString();
    }

	public function getIconAttribute() {
		return $this->category == 0 ? 'ion-ios-gear-outline' : 'ion-ios-world';
	}
}
