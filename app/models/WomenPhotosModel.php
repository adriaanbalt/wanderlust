<?php

class WomenPhotosModel extends Model {

	protected $table = 'women_photos';

	public function model()
	{
		return $this->hasOne('WomenModel','women_id');
	}

	public function cover()
	{
		return $this->hasOne('PhotosModel','photo_id');
	}

}
