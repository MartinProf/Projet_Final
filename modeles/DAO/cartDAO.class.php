<?php
/* Description : DAO pour la classe cart de la BD epiceriebiologique
	Date        : 20-09-22
    Auteur      : Martin Forget / Martin Vézina
	*/

// ****** INLCUSIONS *******
include_once("modeles/DAO/cartDAO.interface.php");
include_once("modeles/cart.class.php");

// ****** CLASSE ******
class cartDAO implements cartDAOinterface

{
	public static function selectParId($id)
	{
        try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}

		$query = $connexion->prepare("SELECT * FROM articlesepicerie WHERE id=?");

		$tableauInfos = [$id->getArticle(), $id->getPrix(), $id->getIdArticle(), $id->getImage_location(), $id->getId()];
    		
		ConnexionBD::close();		
		return $query->execute($tableauInfos);
	}
}