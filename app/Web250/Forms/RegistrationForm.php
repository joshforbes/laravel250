<?php

namespace Web250\Forms;

class RegistrationForm extends FormValidator{

    protected $rules = [
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed',
    ];

} 