<?php

use Web250\Forms\ProfileForm;

class ProfilesController extends \BaseController {

    protected $profileForm;

    function __construct(ProfileForm $profileForm)
    {
        $this->profileForm = $profileForm;
    }



    /**
     * Display the specified resource.
     * GET /profiles/{id}
     *
     * @param  string $username
     * @return Response
     */
    public function show($username)
    {
        $user = User::with('profile')->whereUsername($username)->firstOrFail();

        return View::make('profiles.show')->withUser($user);
    }

    public function edit($username)
    {
        $user = User::whereUsername($username)->firstOrFail();
        return View::make('profiles.edit')->withUser($user);
    }

    public function update($username)
    {
        $user = User::with('profile')->whereUsername($username)->firstOrFail();
        $input = Input::only('name', 'email', 'url', 'company', 'location');

        $this->profileForm->validate($input);

        $user->profile->fill($input)->save();

        Flash::message('Profile updated');

        return Redirect::route('profile.show', $user->username);
    }


}