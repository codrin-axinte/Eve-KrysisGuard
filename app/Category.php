<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends \TCG\Voyager\Models\Category
{

	public function getRouteKeyName() {
		return 'slug';
	}

	public function getPathAttribute(){
		return route('posts.index', $this);
	}

}
