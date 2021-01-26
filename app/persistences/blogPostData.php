<?php
function lastBlogPosts($dataBase) {
$extraction=$dataBase->query('SELECT Text, Pseudo FROM Articles INNER JOIN Authors ON Articles.Authors_id = Authors.id ORDER BY Articles.id LIMIT 10');
    $resultat = $extraction->fetchAll();
    return [$resultat];
}
