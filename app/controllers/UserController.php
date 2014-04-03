<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = [['id'=>1, 'name'=>'Majd Alhaj', 'username'=>'majdelhaj', 'role'=>'Admin'], ['id'=>2, 'name'=>'Muhammed Ahmed', 'username'=>'mohd', 'role'=>'User']];

		return Response::json($users);
		/*

		//Example:
		//////////
		return Response::json(User::all());

		*/
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		/*
		//Example:
		//////////
		User::create(array(
			'username' => Input::get('username'),
			'password' => Input::get('password'),
			'name' => Input::get('name'),
			'role_id' => Input::get('role_id'),
		));

		return Response::json(array('success' => true));

		*/
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		/*

		//Example:
		//////////
		return Response::json(User::find($id));
		
		*/
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


	///////////////////////////////
	//////////////////////////////
	/////////////////////////////
	////////////////////////////

	public function login() {
        $data = array(
			'username' => Input::get('username'),
			'password'=>Input::get('password')
			);

        $remember = false;
        if ( Input::get('remember') == 'remember' ) {
         	$remember = true;
         }

		$validator = User::validateLogin($data);

		if ($validator->passes()) {
			if (Auth::attempt(array('username'=>Input::get('username'), 'password'=>Input::get('password')), $remember)) {
			    // Authenticated user =D
				return Redirect::to('/');
			} else {
				// Fail to authenticate user :(
                //return 'Could not authenticate user !!';
                return Redirect::to('/')->withErrors(array('invalid credentials'));
			}
		} else {
			//return $validator->errors();
			return Redirect::to('/')->withErrors($validator);
		}
    }
    
    public function logout() {
        Auth::logout();
        return Redirect::to('/');
    }

}