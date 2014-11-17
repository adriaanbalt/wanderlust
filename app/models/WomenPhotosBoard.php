<?php

class ImagePhotosBoard extends Model {

	protected $table = 'image_photos_board';

	public function model()
	{
		return $this->hasOne('Image', 'id', 'image_id');
	}

	public function cover()
	{
		return $this->hasOne('ImagePhotos', 'id', 'photo_id');
	}

}
