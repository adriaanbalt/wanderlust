<?php

class ArtistsController extends BaseController {

	public function index()
	{
		$data = ArtistsPhotosBoard::all();

		$this->layout->content = View::make('templates.site.models')->withData($data)->with('pageName', 'new-faces');

		$this->layout->with('pageType', 'cover');
	}

	public function details( $id )
	{
		$photos = Artists::where( 'slug', '=', $id )->firstOrFail()->photos;
		
		$name = Artists::where( 'slug', '=', $id )->firstOrFail()->name;
		$height = Artists::where( 'slug', '=', $id )->firstOrFail()->height;
		$bust = Artists::where( 'slug', '=', $id )->firstOrFail()->bust;
		$hips = Artists::where( 'slug', '=', $id )->firstOrFail()->hips;
		$waist = Artists::where( 'slug', '=', $id )->firstOrFail()->waist;
		$eyes = Artists::where( 'slug', '=', $id )->firstOrFail()->eyes;
		$hair = Artists::where( 'slug', '=', $id )->firstOrFail()->hair;
		$shoes = Artists::where( 'slug', '=', $id )->firstOrFail()->shoes;

		$this->layout->content = View::make('templates.site.details')->with( 'photos', $photos)->with('name', $name )->with('height', $height )->with('bust', $bust )->with('hips', $hips )->with('waist', $waist )->with('eyes', $eyes )->with('hair', $hair )->with('shoes', $shoes );

		$this->layout->with('pageType', 'sleeve');
	}

}

