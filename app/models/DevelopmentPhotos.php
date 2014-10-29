<?php

class ArtistsPhotos extends Model {

	protected $table = 'artists_photos';

	public function cover()
	{
		return $this->belongsTo('ModelsModel','artists_id','photocover_id');
	}

	public function model()
	{
		return $this->belongsTo('Artists','artists_id');
	}

	public function path()
	{
		return $this->path;
	}

}
