<?php

class ErrorController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function showError($message)
    {
        $this->view->message = $message;
        $this->view->render('error/error');
    }
}