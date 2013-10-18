<?php

class RangesController extends BaseController {

	/**
	 * Range Repository
	 *
	 * @var Range
	 */
	protected $range;

	public function __construct(Range $range)
	{
		$this->range = $range;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$ranges = $this->range->all();

		return View::make('ranges.index', compact('ranges'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('ranges.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Range::$rules);

		if ($validation->passes())
		{
			$this->range->create($input);

			return Redirect::route('ranges.index');
		}

		return Redirect::route('ranges.create')
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
		$range = $this->range->findOrFail($id);

		return View::make('ranges.show', compact('range'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$range = $this->range->find($id);

		if (is_null($range))
		{
			return Redirect::route('ranges.index');
		}

		return View::make('ranges.edit', compact('range'));
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
		$validation = Validator::make($input, Range::$rules);

		if ($validation->passes())
		{
			$range = $this->range->find($id);
			$range->update($input);

			return Redirect::route('ranges.show', $id);
		}

		return Redirect::route('ranges.edit', $id)
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
		$this->range->find($id)->delete();

		return Redirect::route('ranges.index');
	}

}
