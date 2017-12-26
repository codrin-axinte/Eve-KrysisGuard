<?php namespace EveBridge\Entities;

use Illuminate\Support\Fluent;

/**
 * @property $id
 * @property $skillpoints
 * @property $trained_level
 * @property $active_level
 */
class Skill extends Fluent {

    public function __construct($attributes = []){
    	parent::__construct();
    	$this->id = $attributes['skill_id'];
    	$this->skillpoints = $attributes['skillpoints_in_skill'];
    	$this->trained_level = $attributes['trained_skill_level'];
    	$this->active_level = $attributes['active_skill_level'];
    }
}