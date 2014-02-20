<?php

class RookiesController extends BaseController {

	public function index()
	{
		$data = RookiesModel::all();
		$this->layout->content = View::make('templates.site.rookies')->withData($data);
	}

}