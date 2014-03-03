<?php

class DevelopmentController extends BaseController {

	public function index()
	{
		// $o = DevelopmentPhotos::find(4)->cover->path;
		// debug ( $o );

		$data = DevelopmentPhotos::all();

		$this->layout->content = View::make('templates.site.models')->withData($data);
	}

	public function details( $id )
	{
		$photos = Development::where( 'slug', '=', $id )->firstOrFail()->photos;
		
		$name = Development::where( 'slug', '=', $id )->firstOrFail()->name;
		$height = Development::where( 'slug', '=', $id )->firstOrFail()->height;
		$bust = Development::where( 'slug', '=', $id )->firstOrFail()->bust;
		$hips = Development::where( 'slug', '=', $id )->firstOrFail()->hips;
		$waist = Development::where( 'slug', '=', $id )->firstOrFail()->waist;
		$eyes = Development::where( 'slug', '=', $id )->firstOrFail()->eyes;
		$hair = Development::where( 'slug', '=', $id )->firstOrFail()->hair;
		$shoes = Development::where( 'slug', '=', $id )->firstOrFail()->shoes;

		$this->layout->content = View::make('templates.site.details')->with( 'photos', $photos)->with('name', $name )->with('height', $height )->with('bust', $bust )->with('hips', $hips )->with('waist', $waist )->with('eyes', $eyes )->with('hair', $hair )->with('shoes', $shoes );
	}

}

