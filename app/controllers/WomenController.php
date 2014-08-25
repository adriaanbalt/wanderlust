<?php

class WomenController extends BaseController {

	public function index()
	{
		$data = WomenPhotosBoard::all();
		// $o = WomenPhotosBoard::find(4)->cover->path;
		// debug ( $o );
		$this->layout->content = View::make('templates.site.models')->withData($data);

		$this->layout->with('pageType', 'cover');
	}

	public function details( $id )
	{
		$photos = Women::where( 'slug', '=', $id )->firstOrFail()->photos;
		
		$name = Women::where( 'slug', '=', $id )->firstOrFail()->name;
		$height = Women::where( 'slug', '=', $id )->firstOrFail()->height;
		$bust = Women::where( 'slug', '=', $id )->firstOrFail()->bust;
		$hips = Women::where( 'slug', '=', $id )->firstOrFail()->hips;
		$waist = Women::where( 'slug', '=', $id )->firstOrFail()->waist;
		$eyes = Women::where( 'slug', '=', $id )->firstOrFail()->eyes;
		$hair = Women::where( 'slug', '=', $id )->firstOrFail()->hair;
		$shoes = Women::where( 'slug', '=', $id )->firstOrFail()->shoes;

		$this->layout->content = View::make('templates.site.details')->with( 'photos', $photos)->with('name', $name )->with('height', $height )->with('bust', $bust )->with('hips', $hips )->with('waist', $waist )->with('eyes', $eyes )->with('hair', $hair )->with('shoes', $shoes );

		$this->layout->with('pageType', 'sleeve');
	}

}