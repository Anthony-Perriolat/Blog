<?php

include "app/persistences/blogPostData.php";
$arrayArticle = blogPostById($Bdd);

include "ressources/views/home.tpl.php";
