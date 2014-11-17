<?php

class DevelopmentPhotos extends Model {

	protected $table = 'development_photos';

	public function cover()
	{
		return $this->belongsTo('ModelsModel','development_id','photocover_id');
	}

	public function model()
	{
		return $this->belongsTo('Development','development_id');
	}

	public function path()
	{
		return $this->path;
	}

}
