<?php
error_reporting(E_ALL);
ini_set('display_errors',true);
ini_set('html_errors',false);
ini_set('display_startup_errors',true);
ini_set('log_errors',false);

include "config/database.php";
$metaTitle = "index";
$metadescription = "Ce-ci est une page index";
$routes = array("home" => "homeController.php"
    ,'blogpost' => "blogPostController.php"
);
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);


if (isset($action))  {
    if (!isset($routes[$action])) {
        require 'ressources/views/erros/404.php';
    }
    else {
        $fichier = $routes[$action];
    }
}
else {
    $fichier = $routes['home'];
}

require 'app/controllers/' . $fichier;


?>
