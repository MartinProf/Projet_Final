<?php

	include_once("controleurs/controleur.abstract.class.php");
	include_once("modeles/DAO/commandeDAO.class.php");
	include_once("modeles/commande.class.php");
	include_once("modeles/DAO/articlesepicerieDAO.class.php");	

	class caisse extends Controleur  {
		
		public function __construct() {
			parent::__construct();
		}
		
		public function executerAction(){
            $leCourriel = $_SESSION['courriel'];
			$laCommande = "";
			$article = articlesepicerieDAO::chercherTous();
			$messageCourriel = "";

			for ($i=0; $i < count($article); $i++) {
				$id = $article[$i]->getId();
				$quantite = $_COOKIE[$article[$i]->getId()];
				if ($quantite>0) {
					$laCommande .=  $id . "," . $quantite . ";";
					$messageCourriel .= '<tr><td>'. $article[$i]->getArticle() .'</td><td>'. $quantite .'</td></tr>';
				}
			}

			commandeDAO::envoieCommande($leCourriel, $laCommande);

			$pour = $leCourriel;
			$sujet = "Facture d'achat";
			$message = "
			<html>
			<head>
				<title>Facture d'achat pour l'épicerie biologique</title>
			</head>
			<body>
				<p>Articles achetés!</p>
			<table>
				<tr>
					<th>Nom de l'article</th>
					<th>Quantité</th>
				</tr>"
				.$messageCourriel.
				"
			</table>
			</body>
			</html>
			";
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= 'From: <webmaster@epiceriebio.com>' . "\r\n";

			//mail($pour,$sujet,$message,$headers);  //Il faut paramètrer le SMTP pour décommenter cette ligne
			$_SESSION['role'] = 'guess';
			$_SESSION['achat'] = '1';
			
			return "decouvrir";
		}
	}	
?>