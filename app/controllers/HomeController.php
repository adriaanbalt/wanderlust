<?php

class HomeController extends BaseController {

	public function index()
	{
		
		$data = Women::all();
		$this->layout->content = View::make('templates.site.models')->withData($data);
	}

}