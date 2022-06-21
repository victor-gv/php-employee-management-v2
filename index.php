<?php 
session_start();

require_once("./config/constants.php");
require_once LIBS . '/router.php';


// Include the base classes
include LIBS . 'classes/Model.php';
include LIBS . 'classes/View.php';
include LIBS . 'classes/Controller.php';

include CONTROLLERS . 'SessionController.php';
include CONTROLLERS . 'errorController.php';

$router = new Router();

