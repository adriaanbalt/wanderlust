<?php

class WomenPhotos extends Model {

	protected $table = 'women_photos';

	public function cover()
	{
		return $this->belongsTo('ModelsModel','women_id','photocover_id');
	}

	public function model()
	{
		return $this->belongsTo('Women','women_id');
	}

	public function path()
	{
		return $this->path;
	}

}
