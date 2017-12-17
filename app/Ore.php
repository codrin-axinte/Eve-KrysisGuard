<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Ore
 *
 * @property int $id
 * @property string $name
 * @property float $unit_price
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ore whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ore whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ore whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ore whereUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ore whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Ore extends Model
{
    protected $fillable = [
        'name',
	    'unit_price'
    ];
}
