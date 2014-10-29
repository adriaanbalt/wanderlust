<?php

class Artists extends ModelsModel {

	protected $table = 'artists';

	public function photos()
	{
		return $this->hasMany( 'ArtistsPhotos', 'artists_id' );
	}

	public function cover()
	{
		return $this->hasOne('ArtistsPhotos', 'id');
	}

}
