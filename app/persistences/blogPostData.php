<?php
function lastBlogPosts($dataBase) {
$extraction=$dataBase->query('SELECT Text, Pseudo,Title FROM Articles INNER JOIN Authors 
    ON Articles.Authors_id = Authors.id ORDER BY Articles.id LIMIT 12');

    return $extraction->fetchAll();
}

function blogPostById($dataBase,$id) {
    $extraction = $dataBase->prepare('SELECT Title,Authors.Pseudo,Text 
FROM Articles 
INNER JOIN Authors 
ON Articles.Authors_id = Authors.id 
WHERE Articles.id = :id');
    $extraction->bindParam(':id', $id, PDO::PARAM_INT);
    $extraction->execute();

    return $extraction->fetchAll();
}
function commentsByBlogPost($dataBase,$id) {
    $extraction=$dataBase->prepare('SELECT Pseudo,Commentaire FROM commentaire INNER JOIN Authors 
ON Authors.id = commentaire.Author_id INNER JOIN Articles
ON Articles.id = commentaire.Articles_id WHERE Articles_id = :id  ');
    $extraction->bindParam(':id', $id, PDO::PARAM_INT);
    $extraction->execute();

    return $extraction->fetchAll();
}