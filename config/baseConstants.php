<?php


//OPCIÓN 1
$documentRoot = getcwd();

//BASE PATH -> FOR REFERENCE FILES
define("BASE_PATH", $documentRoot);
print_r(BASE_PATH);

//BASE URL -> FOR LINK CSS
$uri = $_SERVER['REQUEST_URI'];
print_r($uri);

if (isset($uri) && $uri !== null) {
    $uri = substr($uri, 1);

    $uri = "http://$_SERVER[HTTP_HOST]" . "/" . $uri;
} else {
    $uri = null;
}

define("BASE_URL", $uri);


//OPCIÓN 2
// $documentRoot = getcwd();

// //BASE PATH -> FOR REFERENCE FILES
// define("BASE_PATH", $documentRoot);

// //BASE URL -> FOR LINK CSS
// $uri = $_SERVER['REQUEST_URI'];

// if (isset($uri) && $uri !== null) {
//     $uri = substr($uri, 1);

//     $uri = explode('/', $uri);

//     $uri = "http://$_SERVER[HTTP_HOST]" . "/" . $uri[0] . "/" . $uri[1] . "/". $uri[2]. "/" . $uri[3];
// } else {
//     $uri = null;
// }

// define("BASE_URL", $uri);

