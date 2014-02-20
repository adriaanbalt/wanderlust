<?php

class JoinController extends BaseController {

	public function index()
	{
		$data = RookiesModel::all();
		$this->layout->content = View::make('templates.site.join')->withData($data);
	}

}