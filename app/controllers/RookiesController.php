<?php

class RookiesController extends BaseController {

	public function index()
	{
		$data = RookiesModel::all();
		$this->layout->content = View::make('templates.site.models')->withData($data);
	}

	public function details( $id )
	{
		$data = RookiesModel::all();
		$this->layout->content = View::make('templates.site.details')->withData($data);
	}

}