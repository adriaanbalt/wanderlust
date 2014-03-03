<?php

class DevelopmentPhotos extends Model {

	protected $table = 'development_photos';

	public function model()
	{
		return $this->hasOne('Development', 'id', 'development_id');
	}

	public function cover()
	{
		return $this->hasOne('Photos', 'id', 'photo_id');
	}
}
