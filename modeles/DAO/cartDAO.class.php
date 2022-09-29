<?php
/* Description : DAO pour la classe cart de la BD epiceriebiologique
	Date        : 20-09-22
    Auteur      : Martin Forget / Martin Vézina
	*/

// ****** INLCUSIONS *******
include_once("modeles/DAO/articlesepicerieDAO.interface.php");
include_once("modeles/articlesepicerie.class.php");

// ****** CLASSE ******
class classDAO implements cartDAOinterface

{
	public static function selectParId($id)
	{
        try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}

		$id = $connexion->prepare("SELECT * FROM articlesepicerie WHERE id=?");
    		
		ConnexionBD::close();		
		return $id;
	}
}