<?php

class Development extends ModelsModel {

	protected $table = 'development';

	public function photos()
	{
		return $this->hasMany( 'DevelopmentPhotos', 'development_id' );
	}

	public function cover()
	{
		return $this->hasOne('DevelopmentPhotos', 'id');
	}

}
