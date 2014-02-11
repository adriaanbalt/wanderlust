<?php

class PhotosModel extends Model {

	protected $table = 'photos';

	public function getSlug()
	{
		return $this->slug;
	}

	public function getPath()
	{
		return $this->path;
	}

	public function getTalent()
	{
		return $this->belongsTo('ModelsModel','model_id');
	}

}


/*
	$table->string('title');
	$table4->string('slug');
	$table->string('path');
*/