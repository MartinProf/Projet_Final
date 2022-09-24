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
	</style>
</head>
<body>
<h1>Test unitaire</h1>

<h3>Connexion à la base de données via DAO</h3>
<?php
	include_once("modeles\DAO\DAO.interface.php");
	try {
		$connexion = ConnexionBD::getInstance();
		echo '<h5>Connexion établie</h5>';
	} catch (Exception $e) {
		throw new Exception("<h5>Impossible d’obtenir la connexion à la BD.</h5>");
	}
?>

<h3>Validation méthode chercher(1)</h3>
<?php
	include_once("modeles\DAO\DAO.interface.php");
	include_once("modeles\DAO\EpicerieDAO.class.php");
	$produit = EpicerieDAO::chercher(1);
	echo '<h5>Pour le id 1: '. $produit .'</h5>';
?>

<h3>Validation méthode chercherTous()</h3>
<?php
	include_once("modeles\DAO\DAO.interface.php");
	include_once("modeles\DAO\EpicerieDAO.class.php");
	$tableauProduit = EpicerieDAO::chercherTous();
	echo '<h5>Pour le premier objet de la table id 1: '. $tableauProduit[0] .'</h5>';
?>

<h3>Validation méthode rechercheFiltree('where id=1')</h3>
<?php
	include_once("modeles\DAO\DAO.interface.php");
	include_once("modeles\DAO\EpicerieDAO.class.php");
	$ProduitFiltre = EpicerieDAO::rechercheFiltree('where id=1');
	echo '<h5>Pour le premier objet de la table id 1: '. $ProduitFiltre[0] .'</h5>';
?>

<h3>Validation méthode inserer()</h3>
<?php
	include_once("modeles\DAO\DAO.interface.php");
	include_once("modeles\DAO\EpicerieDAO.class.php");
	$nouvelleArticle = new articlesepicerie("test", 999.99, 1,"images/php_logo.png");
	//EpicerieDAO::inserer($nouvelleArticle);
	echo '<h5>'. $nouvelleArticle .'<img src="'. $nouvelleArticle->getImage_location().'" alt="Test" height="50px"></h5>';
?>

</body>
</html>