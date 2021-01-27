<?php
function lastBlogPosts($dataBase) {
$extraction=$dataBase->query('SELECT Text, Pseudo FROM Articles INNER JOIN Authors ON Articles.Authors_id = Authors.id ORDER BY Articles.id LIMIT 10');
    return $extraction->fetchAll();
}
function blogPostById($dataBase) {
    $extraction = $dataBase->prepare('SELECT id,Pseudo,Text FROM Articles WHERE id = :id INNER JOIN Authors ON Articles.Authors_id = Authors.id ORDER BY Articles.id LIMIT 1');
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT); // <-- filter your data first (see [Data Filtering](#data_filtering)), especially important for INSERT, UPDATE, etc.
    $extraction->bindParam(':id', $id, PDO::PARAM_INT); // <-- Automatically sanitized for SQL by PDO
    $extraction->execute();

    return $extraction->fetchAll();
}
function commentsByBlogPost($dataBase) {
    $extraction=$dataBase->query('SELECT Pseudo,Commentaire FROM commentaire INNER JOIN Authors ON commentaire.Authors_id = Authors.id ORDER BY Articles.id DESC ');
    return $extraction->fetchAll();
}