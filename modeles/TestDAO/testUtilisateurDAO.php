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

<h3>Connexion à la base de données via l'interface utilisateurDAO</h3>
<?php
	include_once("modeles\DAO\connexionBD.class.php");
	try {
		$connexion = ConnexionBD::getInstance();
		echo '<h5>Connexion établie</h5>';
	} catch (Exception $e) {
		throw new Exception("<h5>Impossible d’obtenir la connexion à la BD.</h5>");
	}
?>
<h4><br>***utilisateurDAO***</h4>
<h3><br>Validation méthode chercherUtilisateur(root@root.com)</h3>
<?php
	include_once("modeles\DAO\utilisateurDAO.interface.php");
	include_once("modeles\DAO\utilisateurDAO.class.php");
	$unUtilisateur = utilisateurDAO::chercherUtilisateur("root@root.com");
	echo '<h5>Information pour l\'utilisateur "root@root.com" -->> '. $unUtilisateur .'</h5>';
?>

<h3><br>Validation méthode ajouterUtilisateur("123@123.com", "123")</h3>
<?php
	include_once("modeles\DAO\utilisateurDAO.interface.php");
	include_once("modeles\DAO\utilisateurDAO.class.php");
    $utilisateur = new utilisateur("123@123.com", "123",0);
	utilisateurDAO::ajouterUtilisateur($utilisateur);
	echo '<h5>Information pour l\'utilisateur "123@123.com" -->> '. utilisateurDAO::chercherUtilisateur("123@123.com") .'</h5>';
?>

<h3><br>Validation méthode supprimerUtilisateur("123@123.com")</h3>
<?php
	include_once("modeles\DAO\utilisateurDAO.interface.php");
	include_once("modeles\DAO\utilisateurDAO.class.php");
	utilisateurDAO::supprimerUtilisateur("123@123.com");
	echo '<h5>Information pour l\'utilisateur "123@123.com" -->> '. utilisateurDAO::chercherUtilisateur("123@123.com") .'</h5>';
?>

</body>
</html>