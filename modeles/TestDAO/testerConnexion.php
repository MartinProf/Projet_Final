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
<h3>Validation méthode chercher()</h3>
<?php
include_once("modeles\DAO\DAO.interface.php");
include_once("modeles\DAO\EpicerieDAO.class.php");
$produit = EpicerieDAO::chercher('1');
var_dump(EpicerieDAO::chercher('1'));
//echo '<h5>Pour le id 1: '. $produit->getArticle() .'</h5>';
?>

</body>
</html>