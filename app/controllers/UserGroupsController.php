<?php

class UserGroupsController extends \BaseController {

	/**
	 * Display a listing of usergroups
	 *
	 * @return Response
	 */
	public function index()
	{		
		$usergroups = UserGroup::paginate(5);
		return View::make('user_groups.index', compact('usergroups'));
	}	

	/**
	 * Show the form for creating a new usergroup
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('user_groups.create');
	}

	/**
	 * Store a newly created usergroup in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//$validator = Validator::make($data = Input::all(), Usergroup::$rules);

		// if ($validator->fails())	{ return Redirect::back()->withErrors($validator)->withInput();	}

		$data = Input::all();
		UserGroup::create($data);

		return Redirect::route('usergroups.index');
	}

	/**
	 * Display the specified usergroup.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$usergroup = Usergroup::findOrFail($id);

		return View::make('user_groups.show', compact('usergroup'));
	}

	/**
	 * Show the form for editing the specified usergroup.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$usergroup = Usergroup::find($id);

		return View::make('user_groups.edit', compact('usergroup'));
	}

	/**
	 * Update the specified usergroup in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$usergroup = Usergroup::findOrFail($id);

		//$validator = Validator::make($data = Input::all(), Usergroup::$rules);

		//if ($validator->fails())	{return Redirect::back()->withErrors($validator)->withInput();	}
		$data = Input::all();
		$usergroup->update($data);

		return Redirect::route('user_groups.index');
	}

	/**
	 * Remove the specified usergroup from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Usergroup::destroy($id);

		return Redirect::route('user_groups.index');
	}

}
