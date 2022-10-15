<?php
/* Description : DAO pour la classe cart de la BD epiceriebiologique
	Date        : 20-09-22
    Auteur      : Martin Forget / Martin Vézina
	*/

// ****** INLCUSIONS *******
include_once("modeles/DAO/commandeDAO.interface.php");
include_once("modeles/commande.class.php");

// ****** CLASSE ******
class commandeDAO implements commandeDAOinterface

{
	public static function envoieCommande($email, $commande)
	{
        try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}

		$query = $connexion->prepare("INSERT INTO commande (courriel,commande) VALUES (?,?)");
		
		$tableauInfos = [$email, $commande];
		return $query->execute($tableauInfos);
	}
}