<?php

class ApplicationsController extends BaseController {

	protected $layout = 'master';

	/**
	 * Application Repository
	 *
	 * @var Application
	 */
	protected $application;

	public function __construct(Application $application)
	{
		$this->application = $application;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$applications = $this->application->where("user_id", "=", Auth::user()->id)->get();

		$this->layout->view = View::make('applications.index', compact('applications'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$application = $this->application->where("user_id", "=", Auth::user()->id)->orderBy('created_at')->first();

		if( !$application ) {
			$this->layout->view = View::make('applications.create');
		} else {
			// If resume has been added in last 30 days, display error
			$now = new DateTime("now");
			$interval = $now->diff($application->created_at);

			if( $interval->format('%a') > 30 ) {
				$this->layout->view = View::make('applications.create');
			}

			$this->layout->view = View::make('problem')
				->with('text', 'You have already created an application in the last 30 days. Please check the status of that application.');
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Application::$rules);


		if ($validation->passes())
		{
			// Upload files
			$file = $input['resume_name'];
			$destinationPath = '/var/uploads/';
			$filename = $file->getClientOriginalName();
			$extension =$file->getClientOriginalExtension();

			$resume_hash = md5($filename . Auth::user()->id) . "." . $extension;
			$file->move($destinationPath, $resume_hash);

			$this->application->create(
				array("first_name" => $input['first_name'],
				"last_name" => $input['last_name'],
				"career" => $input['career'],
				"about" => $input['about'],
				"resume_name" => $filename,
				"resume_hash" => $resume_hash,
				"project" => $input['project'],
				"stage_id" => 1,
				"user_id" => Auth::user()->id)
			);

			return Redirect::to('/')
				->with('message', 'Application has been submitted');
		}

		return Redirect::route('applications.create')
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
		$application = $this->application->findOrFail($id);
		if( $application->user_id !== Auth::user()->id ) return App::abort(404);

		$this->layout->view = View::make('applications.show', compact('application'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$application = $this->application->find($id);
		if( $application->user_id !== Auth::user()->id ) return App::abort(404);

		if (is_null($application))
		{
			return Redirect::route('applications.index');
		}

		$this->layout->view = View::make('applications.edit', compact('application'));
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
		$validation = Validator::make($input, Application::$rules);

		if ($validation->passes())
		{
			$application = $this->application->find($id);

			if( $application->user_id !== Auth::user()->id ) return App::abort(404);

			$application->update($input);

			return Redirect::route('applications.show', $id);
		}

		return Redirect::route('applications.edit', $id)
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
		$application = $this->application->find($id);
		if( $application->user_id !== Auth::user()->id ) return App::abort(404);

		$application->delete();

		return Redirect::to('/');
	}

}
