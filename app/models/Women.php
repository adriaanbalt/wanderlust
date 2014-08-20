<?php

class Women extends ModelsModel {

	protected $table = 'women';

	public function photos()
	{
		return $this->hasMany( 'WomenPhotos', 'women_id' );
	}

	public function cover()
	{
		return $this->hasOne('WomenPhotos', 'id');
	}

}
