<?php

namespace Web250\Forms;

class RegistrationForm extends FormValidator{

    protected $rules = [
        'username' => 'required|alpha_num|unique:users',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed',
    ];

} 