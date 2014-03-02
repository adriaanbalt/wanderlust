<?php

class Photos extends Model {

	protected $table = 'photos';

	public function cover()
	{
		return $this->belongsTo('ModelsModel','women_id','photocover_id');
	}

	public function women()
	{
		return $this->belongsTo('Women','women_id');
	}

	public function path()
	{
		return $this->path;
	}

}
