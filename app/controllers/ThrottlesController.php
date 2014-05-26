<?php

class ThrottlesController extends \BaseController {

	/**
	 * Display a listing of throttles
	 *
	 * @return Response
	 */
	public function index()
	{
		$throttles = Throttle::all();

		return View::make('throttles.index', compact('throttles'));
	}

	/**
	 * Show the form for creating a new throttle
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('throttles.create');
	}

	/**
	 * Store a newly created throttle in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Throttle::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Throttle::create($data);

		return Redirect::route('throttles.index');
	}

	/**
	 * Display the specified throttle.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$throttle = Throttle::findOrFail($id);

		return View::make('throttles.show', compact('throttle'));
	}

	/**
	 * Show the form for editing the specified throttle.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$throttle = Throttle::find($id);

		return View::make('throttles.edit', compact('throttle'));
	}

	/**
	 * Update the specified throttle in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$throttle = Throttle::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Throttle::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$throttle->update($data);

		return Redirect::route('throttles.index');
	}

	/**
	 * Remove the specified throttle from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Throttle::destroy($id);

		return Redirect::route('throttles.index');
	}

}
