<?php

class DevelopmentController extends BaseController {

	public function index()
	{
		$data = DevelopmentModel::all();
		$this->layout->content = View::make('templates.site.models')->withData($data);
	}

	public function details( $id )
	{
		$data = DevelopmentModel::all();
		$this->layout->content = View::make('templates.site.details')->withData($data);
	}

}