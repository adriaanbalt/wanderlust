<?php

class TalentController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		foreach ( PhotosModel::all() as $photo)
		{
			debug( $photo->getTalent()->getCover() );
		}
		$this->layout->content = View::make('templates.site.talent')->withData($data);
	}

}