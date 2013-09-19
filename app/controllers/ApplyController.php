<?php

class ApplyController extends \BaseController {


	protected $layout = 'master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($step = 1)
	{
		$this->layout->view = View::make('apply.index')->with('step', $step);
	}

}
