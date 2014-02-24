<?php

class PhotosModel extends Model {

	protected $table = 'photos';

	public function cover()
	{
		return $this->belongsTo('ModelsModel','women_id','photocover_id');
	}

	public function women()
	{
		return $this->belongsTo('WomenModel','women_id');
	}

}


/*
	$table->string('title');
	$table4->string('slug');
	$table->string('path');
*/