<?php
error_reporting(E_ALL);
ini_set('display_errors',true);
ini_set('html_errors',false);
ini_set('display_startup_errors',true);
ini_set('log_errors',false);

include "config/database.php";
$metaTitle = "index";
$metadescription = "Ce-ci est une page index";
$routes = array("header" => "ressources/views/layouts/header.php",
                "footer" => "ressources/views/layouts/footer.php",
                "home" => "homeController.php"
);
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

include $routes['header'];

if (isset($action))  {
    if (!isset($routes[$action])) {
        $fichier = '404.php';
    }
    else {
        $fichier = $routes[$action];
    }

}
else {
    $fichier = $routes['home'];
}

require 'app/controllers/' . $fichier;

require $routes['footer'];

?>
