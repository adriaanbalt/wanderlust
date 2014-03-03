<?php

class Women extends ModelsModel {

	protected $table = 'women';

	public function photos()
	{
		return $this->hasMany( 'Photos', 'women_id' );
	}
}
