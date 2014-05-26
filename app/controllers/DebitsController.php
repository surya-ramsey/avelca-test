<?php

class DebitsController extends \BaseController {

	/**
	 * Display a listing of debits
	 *
	 * @return Response
	 */
	public function index()
	{
		$debits = Debit::all();

		return View::make('debits.index', compact('debits'));
	}

	/**
	 * Show the form for creating a new debit
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('debits.create');
	}

	/**
	 * Store a newly created debit in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Debit::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Debit::create($data);

		return Redirect::route('debits.index');
	}

	/**
	 * Display the specified debit.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$debit = Debit::findOrFail($id);

		return View::make('debits.show', compact('debit'));
	}

	/**
	 * Show the form for editing the specified debit.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$debit = Debit::find($id);

		return View::make('debits.edit', compact('debit'));
	}

	/**
	 * Update the specified debit in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$debit = Debit::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Debit::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$debit->update($data);

		return Redirect::route('debits.index');
	}

	/**
	 * Remove the specified debit from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Debit::destroy($id);

		return Redirect::route('debits.index');
	}

}
