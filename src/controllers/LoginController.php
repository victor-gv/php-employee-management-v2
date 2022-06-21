<?php

include('./loginManager.php');
//we can do urlFile = basename... para determinar si viene desde index o desde dasborah la peticion y asi saber cuando hacer validate o logout
validate();

require_once ("../libs/classes/Controller.php");

class LoginController extends Controller{

}
