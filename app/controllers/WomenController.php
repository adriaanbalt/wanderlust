<?php

class WomenController extends BaseController {

	public function index()
	{
		$data = WomenPhotosBoard::all();
		$o = WomenPhotosBoard::find(4)->cover->path;
		debug ( $o );
		$this->layout->content = View::make('templates.site.models')->withData($data);
	}

	public function details( $id )
	{
		$data = Women::where( 'slug', '=', $id )->firstOrFail()->photos;
		$name = Women::where( 'slug', '=', $id )->firstOrFail()->name;
		$this->layout->content = View::make('templates.site.details')->with( 'data', $data)->with('name', $name );
	}

}