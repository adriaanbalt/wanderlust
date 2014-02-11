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

}


/*
	$table->string('title');
	$table->string('slug');
	$table->string('path');
*/