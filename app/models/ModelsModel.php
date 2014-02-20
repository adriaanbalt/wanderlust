<?php

class ModelsModel extends Model {

	public function getSlug()
	{
		return $this->slug;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getHeight()
	{
		return $this->height;
	}

	public function getBust()
	{
		return $this->bust;
	}

	public function getWaist()
	{
		return $this->waist;
	}

	public function getHips()
	{
		return $this->hips;
	}

	public function getShoes()
	{
		return $this->shoes;
	}

	public function getHair()
	{
		return $this->hair;
	}

	public function getEyes()
	{
		return $this->eyes;
	}

	public function cover()
	{
		return $this->hasOne('PhotosModel', 'id');
	}

}


/*
    $table->string('slug');

    $table->string('name');
    $table->string('height');
    $table->string('bust');
    $table->string('waist');
    $table->string('hips');
    $table->string('shoes');
    $table->string('hair');
    $table->string('eyes');
*/