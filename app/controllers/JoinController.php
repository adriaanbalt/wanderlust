<?php

class JoinController extends BaseController {

	public function index()
	{
		$data = JoinModel::all();
		$this->layout->content = View::make('templates.site.join')->withData($data);
		$this->layout->with('pageType', 'sleeve');
	}

}