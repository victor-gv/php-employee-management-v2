<?php

class View {
    function render($name) {
        require_once VIEWS . "/$name.php";
    }
}