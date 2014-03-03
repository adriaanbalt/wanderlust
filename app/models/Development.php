<?php

class Development extends ModelsModel {

	protected $table = 'development';

	public function photos()
	{
		return $this->hasMany( 'Photos', 'development_id' );
	}
}
