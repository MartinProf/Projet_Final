<?php
include_once("modeles/DAO/articlesepicerieDAO.class.php");
include_once("modeles/articlesepicerie.class.php");
$tableauArticles = articlesepicerieDAO::chercherTous();


for ($i=0; $i < count($tableauArticles); $i++){
    $quantite = $_COOKIE['article'.$tableauArticles[$i]->getId()];
    if ($quantite >0) {
        echo $tableauArticles[$i]->getId() . " avec une quantite de: " . $quantite . "<br>";
    }
}

?>

<h1>Une erreur c'Est produit, veuillez communiquer avec l'administrateur</h1>