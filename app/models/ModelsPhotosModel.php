<?php

class ModelsPhotosModel extends Model {

	protected $table = 'models_photos';

	public function getModelID()
	{
		return $this->model_id;
	}

	public function getPhotoID()
	{
		return $this->photo_id;
	}

}


/*
	$table->string('title');
	$table->string('slug');
	$table->string('path');
*/