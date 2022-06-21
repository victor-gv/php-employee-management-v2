<?php

class ErrorController extends Controller
{
    function showError($message)
    {
        $this->view->message = $message;
        $this->view->render('error/error');
    }
}