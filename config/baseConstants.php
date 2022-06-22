<?php

$documentRoot = getcwd();

//BASE PATH -> FOR REFERENCE FILES
define("BASE_PATH", $documentRoot);

define('PROTOCOL', (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS'] == 'on')) ? 'https://' : 'http://');
define('DOMAIN', $_SERVER['HTTP_HOST']);
define('BASE_URL', preg_replace("/\/$/", '', PROTOCOL . DOMAIN . str_replace(array('\\', "index.php", "index.html"), '', dirname(htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES))), 1) . '/');

//BASE URL -> FOR LINK CSS
// $uri = $_SERVER['REQUEST_URI'];
// print_r($uri);
// if (isset($uri) && $uri !== null) {
//     $uri = substr($uri, 1);
//     $uri = explode('/', $uri);
//     $uri = "http://$_SERVER[HTTP_HOST]" . "/" . $uri[0] . "/" . $uri[1];
// } else {
//     $uri = null;
// }
// print_r($uri);
// define("BASE_URL", $uri);