<?php

class ImagePhotos extends Model {

	protected $table = 'image_photos';

	public function cover()
	{
		return $this->belongsTo('ModelsModel','image_id','photocover_id');
	}

	public function model()
	{
		return $this->belongsTo('Image','image_id');
	}

	public function path()
	{
		return $this->path;
	}

}
