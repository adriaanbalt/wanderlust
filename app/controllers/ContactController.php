<?php

class ContactController extends BaseController {

	public function index()
	{
		$data = RookiesModel::all();
		$this->layout->content = View::make('templates.site.contact')->withData($data);
	}

}