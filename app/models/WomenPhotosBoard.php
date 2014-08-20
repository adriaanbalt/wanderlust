<?php

class WomenPhotosBoard extends Model {

	protected $table = 'women_photos_board';

	public function model()
	{
		return $this->hasOne('Women', 'id', 'women_id');
	}

	public function cover()
	{
		return $this->hasOne('WomenPhotos', 'id', 'photo_id');
	}

}
