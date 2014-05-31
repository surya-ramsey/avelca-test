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

		$groups = DB::table('groups')->orderBy('name','asc')->lists('name','id');
		return View::make('user_groups.create', array('group_options'=>$groups));
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

		return Redirect::route('usergroups.index')->with('success','Data User Group has been saved');
	}

	/**
	 * Display the specified usergroup.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{		
	}

	/**
	 * Show the form for editing the specified usergroup.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$usergroup = UserGroup::find($id);
		$group_options = DB::table('groups')->orderBy('name','asc')->lists('name','id');
		return View::make('user_groups.edit', compact('usergroup','group_options'));
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

	public function getuseremail($term){		
		$suggestion = User::where('email','LIKE','%'.$term.'%');
		return Response::json($suggestion);
	}

	public function senduser(){
		$term = Input::get('term');
		$users = array();
		$search = User::where('email','LIKE','%'.$term.'%')->get();

		foreach ($search as $results => $user) {
			$users[]=array('id'=>$user->id,
							'email'=>$user->email);
		}
		return Response::json($users);
	}

}
