<?php

namespace Web250\Forms;

class ProfileForm extends FormValidator{

    protected $rules = [
        'email' => 'email',
    ];
} 