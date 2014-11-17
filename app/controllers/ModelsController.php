<?php

class ModelsController extends BaseController {

	public function index()
	{
		$data = ImagePhotosBoard::all();
		
		$this->layout->content = View::make('templates.site.models')->withData($data)->with('pageName', 'image');

		$this->layout->with('pageType', 'cover');
	}

	public function category( $categoryID )
	{
		// build the page based on the category
		$data = ImagePhotosBoard::all();
		
		$this->layout->content = View::make('templates.site.models')->withData($data)->with('pageName', 'image');

		$this->layout->with('pageType', 'cover');
	}

	public function details( $id )
	{
		$photos = Image::where( 'slug', '=', $id )->firstOrFail()->photos;
		
		$name = Image::where( 'slug', '=', $id )->firstOrFail()->name;
		$height = Image::where( 'slug', '=', $id )->firstOrFail()->height;
		$bust = Image::where( 'slug', '=', $id )->firstOrFail()->bust;
		$hips = Image::where( 'slug', '=', $id )->firstOrFail()->hips;
		$waist = Image::where( 'slug', '=', $id )->firstOrFail()->waist;
		$eyes = Image::where( 'slug', '=', $id )->firstOrFail()->eyes;
		$hair = Image::where( 'slug', '=', $id )->firstOrFail()->hair;
		$shoes = Image::where( 'slug', '=', $id )->firstOrFail()->shoes;

		$this->layout->content = View::make('templates.site.details')->with( 'photos', $photos)->with('name', $name )->with('height', $height )->with('bust', $bust )->with('hips', $hips )->with('waist', $waist )->with('eyes', $eyes )->with('hair', $hair )->with('shoes', $shoes );

		$this->layout->with('pageType', 'sleeve');
	}

}