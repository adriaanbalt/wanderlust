<?php

class Image extends ModelsModel {

	protected $table = 'image';

	public function photos()
	{
		return $this->hasMany( 'ImagePhotos', 'image_id' );
	}

	public function cover()
	{
		return $this->hasOne('ImagePhotos', 'id');
	}

}
