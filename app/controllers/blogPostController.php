<?php
$id = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT))  ;
include "app/persistences/blogPostData.php";

$arrayArticle = blogPostById($Bdd, $id);
$arrayArticleCom = commentsByBlogPost($Bdd, $id);

require "ressources/views/blogPost.tpl.php";
