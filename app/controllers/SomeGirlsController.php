<?php

class SomegirlsController extends BaseController {

	public function index()
	{
		
		$data = SomegirlsModel::all();
		$this->layout->content = View::make('templates.site.somegirls')->withData($data);
	}

}