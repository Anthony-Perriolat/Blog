<?php

include "app/persistences/blogPostData.php";

$arrayForme=array(
    $formTitle=filter_input(INPUT_POST,"Title",FILTER_SANITIZE_STRING),
    $formPseudo=filter_input(INPUT_POST, "Pseudo",FILTER_SANITIZE_NUMBER_INT),
    $formImportance=filter_input(INPUT_POST,"Importance",FILTER_SANITIZE_NUMBER_INT),
    $formDateS=filter_input(INPUT_POST,"dateS",FILTER_SANITIZE_NUMBER_INT),
    $formDateE=filter_input(INPUT_POST,"dateE",FILTER_SANITIZE_NUMBER_INT),
    $fromText=filter_input(INPUT_POST,"Texte",FILTER_SANITIZE_STRING));

    $coucou=blogPostCreate($Bdd,$formTitle,$formPseudo,$formImportance,$formDateS,$formDateE,$fromText);
var_dump($arrayForme);

require "ressources/views/blogPostCreate.tpl.php";
