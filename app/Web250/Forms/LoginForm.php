<?php

namespace Web250\Forms;

class LoginForm extends FormValidator{

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required'
    ];

} 