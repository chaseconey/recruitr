<?php

class HomeController extends \BaseController {

	protected $layout = 'master';
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$app = Application::where("user_id", "=", Auth::user()->id)->orderBy('created_at')->first();

		$this->layout->view = View::make('home.index')
			->with('app', $app);
	}

}