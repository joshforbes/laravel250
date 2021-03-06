<?php


use Web250\Forms\LoginForm;

class SessionsController extends \BaseController {

    /**
     * @var FormValidator
     */
    private $loginForm;

    function __construct(LoginForm $loginForm)
    {
        $this->loginForm = $loginForm;
    }


    /**
	 * Show the form for creating a new resource.
	 * GET /sessions/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sessions
	 *
	 * @return Response
	 */
	public function store()
	{
		$this->loginForm->validate($input = Input::only(['email', 'password']));

        if (Auth::attempt($input))
        {
            Flash::message('Welcome back '.Auth::user()->username);
            return Redirect::intended('/');
        }

        Flash::error('Invalid credentials provided');

        return Redirect::back()->withInput();
	}

	/**
	 * Display the specified resource.
	 * GET /sessions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /sessions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id = null)
	{
		Auth::logout();

        return Redirect::home();
	}

}