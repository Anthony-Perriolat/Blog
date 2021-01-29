<?php
function lastBlogPosts($dataBase) {
$extraction=$dataBase->query('SELECT Text, Pseudo,Title FROM Articles INNER JOIN Authors 
    ON Articles.Authors_id = Authors.id ORDER BY Articles.id LIMIT 12');

    return $extraction->fetchAll();
}

function blogPostById($dataBase,$id) {
    $extraction = $dataBase->prepare('SELECT Title,Authors.Pseudo,Text FROM Articles INNER JOIN Authors 
ON Articles.Authors_id = Authors.id WHERE Articles.id = :id');
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
function blogPostCreate($dataBase,$formTitle,$formPseudo,$formImportance,$formDateS,$formDateE,$fromText){
    $dataBase->query("INSERT INTO Articles (Title, Authors_id, Importance, Date_Start, Date_End, Text)
        VALUES ('$formTitle', '$formPseudo','$formImportance',
        '$formDateS','$formDateE','$fromText')");


}

//    function blogPostCreate($dataBase,$formTitle,$formPseudo,$formImportance,$formDateS,$formDateE,$fromText){
//    $ExistPseudo= $dataBase->query("SELECT Pseudo,Authors_id FROM Authors
//INNER JOIN Articles ON Articles.Authors_id = Authors.id WHERE Pseudo = :formPseudo");
//    $ExistPseudo->fetch;
//    if (empty($testExistPseudo)) {
//    $dataBase->query("INSERT INTO Authors (Pseudo)
//    VALUES ('$formPseudo')") AND ;
//    }
//    $dataBase->query("INSERT INTO Articles (Title, Importance, Date_Start, Date_End, Text)
//        VALUES ('$formTitle','$formImportance',
//        '$formDateS','$formDateE','$fromText')");
//
//
//}