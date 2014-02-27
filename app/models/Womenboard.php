<?php

class Womenboard extends Model {

	protected $table = 'womenboard';

	public function model()
	{
		return $this->hasMany('Women');
	}

	public function photos()
	{
		return $this->hasOne('Photos');
	}
}
