<!--coucou -->


<?php
include "config/database.php";
$metaTitle = "index";
$metadescription = "Ce-ci est une page index";
$routes = array("header" => "pages/header.php", "footer" => "pages/footer.php", "acceuil" => "pages/acceuil.php", "moncv" => "pages/moncv.php", "hobbie" => "pages/hobbie.php", "contact" => "pages/contact.php", "404" => "pages/404.php" );
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

include $routes['header'];

if ($action)  {
    $sendname = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
    $sendsurname = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
    $sendemail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $sendsex = filter_input(INPUT_POST, 'sexe', FILTER_SANITIZE_STRING);
    $sendrequest = filter_input(INPUT_POST, 'demande', FILTER_SANITIZE_STRING);
    $sendcom = filter_input(INPUT_POST, 'commentaire', FILTER_SANITIZE_STRING);
    if (isset($sendname, $sendsurname, $sendemail, $sendsex, $sendrequest, $sendcom) && !empty($_POST)) {
        //Creation ficher contenu du form
        $ficher = 'Contact/contact_' . date('Y-m-d-H-i-s') . '.txt';
        file_put_contents($ficher, $sendname . PHP_EOL . $sendsurname . PHP_EOL . $sendemail . PHP_EOL . $sendsex . PHP_EOL . $sendrequest . PHP_EOL . $sendcom);
    }
    if (array_key_exists($action, $routes)) {
        require $routes[$action];
    }
    else {
        require $routes['404'];
    }
}
else {
    require $routes['acceuil'];
}

include $routes['footer'];

?>

<!--ob_start();-->
<!--$render = ob_get_contents();-->
<!--$render = ob_get_clean();-->
