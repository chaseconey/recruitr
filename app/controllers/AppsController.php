<?php

class AppsController extends BaseController {

	/**
	 * App Repository
	 *
	 * @var App
	 */
	protected $app;

	public function __construct(App $app)
	{
		$this->app = $app;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$apps = $this->app->all();

		return View::make('apps.index', compact('apps'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('apps.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, App::$rules);

		if ($validation->passes())
		{
			$this->app->create($input);

			return Redirect::route('apps.index');
		}

		return Redirect::route('apps.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$app = $this->app->findOrFail($id);

		return View::make('apps.show', compact('app'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$app = $this->app->find($id);

		if (is_null($app))
		{
			return Redirect::route('apps.index');
		}

		return View::make('apps.edit', compact('app'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, App::$rules);

		if ($validation->passes())
		{
			$app = $this->app->find($id);
			$app->update($input);

			return Redirect::route('apps.show', $id);
		}

		return Redirect::route('apps.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->app->find($id)->delete();

		return Redirect::route('apps.index');
	}

}
