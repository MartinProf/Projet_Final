<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Ajouter un produit</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/styleFormulaire.css" />
	<style>
		h1 {
			background-color: black;
			color: white;
		}
		h2 {
			background-color: #CCCCCC;
		}
		.affichage {

			background-color: #AAFFAA;

		}
		h3{
			color: blue;
		}
		h4{
			color:darkmagenta;
		}
	</style>
</head>
<body>
<h1>Test unitaire</h1>

<h3>Connexion à la base de données via l'interface articlesepicerieDAO</h3>
<?php
	include_once("modeles\DAO\articlesepicerieDAO.interface.php");
	try {
		$connexion = ConnexionBD::getInstance();
		echo '<h5>Connexion établie</h5>';
	} catch (Exception $e) {
		throw new Exception("<h5>Impossible d’obtenir la connexion à la BD.</h5>");
	}
?>
<h4>***articlesepicerieDAO***</h4>
<h3><br>Validation méthode chercherArticle(1)</h3>
<?php
	include_once("modeles\DAO\articlesepicerieDAO.interface.php");
	include_once("modeles\DAO\articlesepicerieDAO.class.php");
	$unArticle = articlesepicerieDAO::chercherArticle(1);
	echo '<h5>Information pour l\'id #1 -->> '. $unArticle .'</h5>';
?>

<h3><br>Validation méthode chercherTous()</h3>
<?php
	include_once("modeles\DAO\articlesepicerieDAO.interface.php");
	include_once("modeles\DAO\articlesepicerieDAO.class.php");
	$tableauProduit = articlesepicerieDAO::chercherTous();
	echo '<h5>Pour le premier objet de la table id 1: -->>'. $tableauProduit[0] .'</h5>';
?>

<h3>Validation méthode insererArticle("test", 999.99, 1,"images/php_logo.png")</h3>
<?php
	include_once("modeles\DAO\articlesepicerieDAO.interface.php");
	include_once("modeles\DAO\articlesepicerieDAO.class.php");
	$nouvelleArticle = new articlesepicerie("test", 999.99, 1,"images/php_logo.png");
	articlesepicerieDAO::insererArticle($nouvelleArticle);
	echo '<h5>L\'objet inséré: -->>'. $nouvelleArticle .'<img src="'. $nouvelleArticle->getImage_location().'" alt="Test" height="50px"></h5>';
?>
<?php
    $tableauMAJ = articlesepicerieDAO::chercherTous();
    $derniereLigne = end($tableauMAJ);
    $nouveauID = $derniereLigne->getId();
?>

<h3>Validation méthode modifierArticle(?,"test_réussi", 0.00, 2,"images/heureux.png")</h3>
<?php
    include_once("modeles\DAO\articlesepicerieDAO.interface.php");
    include_once("modeles\DAO\articlesepicerieDAO.class.php");
    $articleModifie = new articlesepicerie($nouveauID,"test_réussi", 0.00, 2,"images/heureux.png");
    articlesepicerieDAO::modifierArticle($articleModifie);
    $nouveauArticle = articlesepicerieDAO::chercherArticle($nouveauID);
    echo '<h5>Le prix du produit id('.$nouveauID.') a été modifié -->>'. $nouveauArticle .'<img src="'. $nouveauArticle->getImage_location().'" alt="Test" height="50px"></h5>';
?>

<h3>Validation méthode supprimerArticle($id)</h3>
<?php
    include_once("modeles\DAO\articlesepicerieDAO.interface.php");
    include_once("modeles\DAO\articlesepicerieDAO.class.php");
    echo '<h5>Affichage du ID ('.$nouveauID.') avant suppression -->>'.$nouveauArticle.'</h5>';
    articlesepicerieDAO::supprimerArticle($nouveauID);
    echo '<h5>Affichage du ID ('.$nouveauID.') après suppression-->>'. articlesepicerieDAO::chercherArticle($nouveauID) .'</h5>';
?>

</body>
</html>