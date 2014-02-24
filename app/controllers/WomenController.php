<?php

class WomenController extends BaseController {

	public function index()
	{
		$data = WomenModel::all();
		$this->layout->content = View::make('templates.site.models')->withData($data);
	}

	public function details( $id )
	{
		$data = WomenModel::where( 'slug', '=', $id )->firstOrFail()->photos;
		$name = WomenModel::where( 'slug', '=', $id )->firstOrFail()->name;
		$this->layout->content = View::make('templates.site.details')->with( 'data', $data)->with('name', $name );
	}

}