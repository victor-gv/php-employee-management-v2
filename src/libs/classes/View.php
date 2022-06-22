<?php
class View{
    function render($name){
        require_once VIEWS . "$name.php";
        print_r(VIEWS . "$name.php");
    }
}