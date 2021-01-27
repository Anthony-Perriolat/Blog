<?php
include "app/persistences/blogPostData.php";
$arrayhome=lastBlogPosts($Bdd);

include "ressources/views/home.tpl.php"
?>