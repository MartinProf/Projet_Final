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

<h3><br>Validation méthode chercher(1)</h3>
<h4>***articlesepicerieDAO***</h4>
<?php
	include_once("modeles\DAO\DAO.interface.php");
	include_once("modeles\DAO\articlesepicerieDAO.class.php");
	$produit = articlesepicerieDAO::chercher(1);
	echo '<h5>Pour le id 1: '. $produit .'</h5>';
?>
<h4><br>***utilisateurDAO***</h4>
<?php
	include_once("modeles\DAO\DAO.interface.php");
	include_once("modeles\DAO\utilisateurDAO.class.php");
	$unUtilisateur = utilisateurDAO::chercher(1);
	echo '<h5>Pour le id 1 : '. $unUtilisateur .'</h5>';
?>

<p><br>******************************<br></p>

<h3><br>Validation méthode chercherTous()</h3>
<h4>***articlesepicerieDAO***</h4>
<?php
	include_once("modeles\DAO\DAO.interface.php");
	include_once("modeles\DAO\articlesepicerieDAO.class.php");
	$tableauProduit = articlesepicerieDAO::chercherTous();
	echo '<h5>Pour le premier objet de la table id 1: '. $tableauProduit[0] .'</h5>';
?>
<h4><br>***utilisateurDAO***</h4>
<?php
	include_once("modeles\DAO\DAO.interface.php");
	include_once("modeles\DAO/utilisateurDAO.class.php");
	$tableauUtilisateur = utilisateurDAO::chercherTous();
	echo '<h5>Pour le premier objet de la table id 1: '. $tableauUtilisateur[0] .'</h5>';
?>

<p><br>******************************<br></p>

<h3>Validation méthode rechercheFiltree('where id=1')</h3>
<h4>***articlesepicerieDAO***</h4>
<?php
	include_once("modeles\DAO\DAO.interface.php");
	include_once("modeles\DAO\articlesepicerieDAO.class.php");
	$ProduitFiltre = articlesepicerieDAO::rechercheFiltree('where id=1');
	echo '<h5>Pour le premier objet de la table id 1: '. $ProduitFiltre[0] .'</h5>';
?>
<h4><br>***utilisateurDAO***</h4>
<?php
	include_once("modeles\DAO\DAO.interface.php");
	include_once("modeles\DAO\utilisateurDAO.class.php");
	$utilisateurFiltre = utilisateurDAO::rechercheFiltree('where idUtilisateur=2');
	echo '<h5>Pour le premier objet de la table id 1: '. $utilisateurFiltre[0] .'</h5>';
?>

<p><br>******************************<br></p>

<h3>Validation méthode inserer()</h3>
<h4>***articlesepicerieDAO***</h4>
<?php
	include_once("modeles\DAO\DAO.interface.php");
	include_once("modeles\DAO\articlesepicerieDAO.class.php");
	$nouvelleArticle = new articlesepicerie("test", 999.99, 1,"images/php_logo.png");
	//EpicerieDAO::inserer($nouvelleArticle);
	echo '<h5>'. $nouvelleArticle .'<img src="'. $nouvelleArticle->getImage_location().'" alt="Test" height="50px"></h5>';
?>
<h4><br>***utilisateurDAO***</h4>
<?php
	include_once("modeles\DAO\DAO.interface.php");
	include_once("modeles\DAO\utilisateurDAO.class.php");
	$nouvelUtilisateur = new utilisateur(5, "Nouveau", "Dude", "Paolo", "TheDude@pronto.onion", 12345, 0);
	//EpicerieDAO::inserer($nouvelleArticle);
	echo '<h5>'. $nouvelUtilisateur .'</h5>';
?>

<p><br>******************************<br></p>

<h3>Validation méthode modifierUnParam()</h3>
<h4>***articlesepicerieDAO***</h4>
<?php
include_once("modeles\DAO\DAO.interface.php");
include_once("modeles\DAO\articlesepicerieDAO.class.php");
$produitUnParamModifie = articlesepicerieDAO::modifierUnParam(4, 3.97);
'<h5>Le prix du produit id(4) a été modifié'. $produitUnParamModifie . '<5>';
?>
<h4><br>***utilisateurDAO***</h4>
<?php
include_once("modeles\DAO\DAO.interface.php");
include_once("modeles\DAO\utilisateurDAO.class.php");
$utilisateurUnParamModifie = utilisateurDAO::modifierUnParam(4, 65432);
'<h5>Le password du user id(5) a été modifié'. $utilisateurUnParamModifie . '<5>';
?>

</body>
</html>