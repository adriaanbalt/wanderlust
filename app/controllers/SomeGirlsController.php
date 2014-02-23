<?php

class SomegirlsController extends BaseController {

	public function index()
	{	
		$data = SomegirlsModel::all();
		$this->layout->content = View::make('templates.site.models')->withData($data);
	}

	public function details( $id )
	{
		$data = SomegirlsModel::all();
		$this->layout->content = View::make('templates.site.details')->withData($data);
	}

}