<?php

namespace Web250\Forms;


use Illuminate\Support\MessageBag;

class FormValidationException extends \Exception {

    /**
     * @var MessageBag
     */
    protected $errors;

    function __construct($message,  MessageBag $errors)
    {
        $this->errors = $errors;

        parent::__construct($message);
    }

    /**
     * @return MessageBag
     */
    public function getErrors()
    {
        return $this->errors;
    }


} 