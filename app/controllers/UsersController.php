<?php

class UsersController extends \BaseController {

	public $layout = 'layouts.default';

	/**
	 * Display a listing of users
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::paginate(5);

		//$this->layout->nest('content', 'users.index', array('users' => $users));
		return View::make('users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new user
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->nest('content', 'users.create');
	}

	/**
	 * Store a newly created user in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();		

		User::create($data);

		return Redirect::route('users.index');
	}

	/**
	 * Display the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::findOrFail($id);

		return View::make('users.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);

		return View::make('users.edit', compact('user'));
	}

	/**
	 * Update the specified user in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = User::findOrFail($id);

		//$validator = Validator::make($data = Input::all(), User::$rules);

		//if ($validator->fails()) {return Redirect::back()->withErrors($validator)->withInput();}
		$data = Input::all();
		$user->update($data);

		return Redirect::route('users.index');
	}

	/**
	 * Remove the specified user from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		User::destroy($id);

		return Redirect::route('users.index');
	}

}
