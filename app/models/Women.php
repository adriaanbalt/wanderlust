<?php

class Women extends Model {

	protected $table = 'women';

	public function slug()
	{
		return $this->slug;
	}

	public function name()
	{
		return $this->name;
	}

	public function height()
	{
		return $this->height;
	}

	public function bust()
	{
		return $this->bust;
	}

	public function waist()
	{
		return $this->waist;
	}

	public function hips()
	{
		return $this->hips;
	}

	public function shoes()
	{
		return $this->shoes;
	}

	public function hair()
	{
		return $this->hair;
	}

	public function eyes()
	{
		return $this->eyes;
	}

	public function cover()
	{
		return $this->hasOne('Photos', 'id');
	}

	public function photos()
	{
		return $this->hasMany( 'Photos', 'women_id' );
	}
}
