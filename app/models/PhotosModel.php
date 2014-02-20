<?php

class PhotosModel extends Model {

	protected $table = 'photos';

	public function talent()
	{
		return $this->belongsTo('ModelsModel','model_id','photocover_id');
	}

}


/*
	$table->string('title');
	$table4->string('slug');
	$table->string('path');
*/