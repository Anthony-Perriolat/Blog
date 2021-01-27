<?php
include "app/persistences/blogPostData.php";
$arrayArticle=lastBlogPosts($Bdd);
var_dump($arrayArticle);
include "ressources/views/home.tpl.php"
?>