<?php

class DevelopmentPhotosBoard extends Model {

	protected $table = 'development_photos_board';

	public function model()
	{
		return $this->hasOne('Development', 'id', 'development_id');
	}

	public function cover()
	{
		return $this->hasOne('DevelopmentPhotos', 'id', 'photo_id');
	}
}
