<?php

class ModelsPhotosModel extends Model {

	protected $table = 'models_photos';

	public function models()
	{
		return $this->belongsTo('ModelsModel','women_id','photocover_id');
	}

}


/*
	$table->string('title');
	$table4->string('slug');
	$table->string('path');
*/