<?php

class ArtistsPhotosBoard extends Model {

	protected $table = 'artists_photos_board';

	public function model()
	{
		return $this->hasOne('Artists', 'id', 'artists_id');
	}

	public function cover()
	{
		return $this->hasOne('ArtistsPhotos', 'id', 'photo_id');
	}
}
