<?php

class DevelopmentPhotosModel extends Model {

	protected $table = 'development_photos';

	public function model()
	{
		return $this->hasOne('DevelopmentModel','development_id');
	}

	public function cover()
	{
		return $this->hasOne('PhotosModel','photocover_id');
	}

}
