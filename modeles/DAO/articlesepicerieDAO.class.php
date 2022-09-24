<?php
/* Description : DAO pour la classe epicerie de la BD epiceriebiologique
	Date        : 20-09-22
    Auteur      : Martin Forget / Martin Vézina
	*/

// ****** INLCUSIONS *******
include_once("modeles/DAO/DAO.interface.php");
include_once("modeles/articlesepicerie.class.php");

// ****** CLASSE ******
class articlesepicerieDAO implements DAO
{
	public static function chercher($id)
	{
		try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		
		$unItem = null;

		$query = $connexion->prepare("SELECT * FROM articlesepicerie WHERE id=?");
		
		$query->execute(array($id));

		if ($query->rowCount() != 0) {
			$enr = $query->fetch();
			$unItem = new articlesepicerie(
				$enr['id'],
				$enr['article'],
				$enr['prix'],
                $enr['idArticle'],
				$enr['image_location']
			);
		}
		
		$query->closeCursor();		
		ConnexionBD::close();		
		return $unItem;
	}

	
	static public function chercherTous()
	{
		try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		
		$tableau = [];
		$query = $connexion->prepare("SELECT * FROM articlesepicerie");
		$query->execute();
		
		foreach ($query as $enr) {
			$unProduit = new articlesepicerie(
				$enr['id'],
				$enr['article'],
				$enr['prix'],
                $enr['idArticle'],
				$enr['image_location']
			);															
			array_push($tableau, $unProduit);
		}

		$query->closeCursor();
		ConnexionBD::close();
		return $tableau;
	}

	
	static public function rechercheFiltree($filtre)
	{
		try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		
		$tableau = [];	
		$query = $connexion->prepare("SELECT * FROM articlesepicerie " . $filtre);
		$query->execute();
		
		foreach ($query as $enr) {
			$unItem = new articlesepicerie(
				$enr['id'],
				$enr['article'],
				$enr['prix'],
				$enr['idArticle'],
				$enr['image_location']
			);
																			
			array_push($tableau, $unItem);
		}

		$query->closeCursor();
		ConnexionBD::close();
		return $tableau;
	}


	static function inserer($unItem)
	{
		try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		
		$query = $connexion->prepare("INSERT INTO articlesepicerie (article,prix,idArticle,image_location) VALUES (?,?,?,?)");
		
		$tableauInfos = [$unItem->getArticle(), $unItem->getPrix(), $unItem->getIdArticle(), $unItem->getImage_location()];
		return $query->execute($tableauInfos);
	}

	
	static public function modifierUnParam($id, $modif)
	{
		try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		
		$query = $connexion->prepare("UPDATE epiceriebiologique SET prix=? WHERE id=?");

		$tableauInfos = [
			$id->getId(), $id->getArticle(),
			$id->getPrix(), $id->getIdArticle(), $id->getImage_location()];
		return $query->execute($tableauInfos);
	}


    static public function modifierTout($unItem)
    {
        try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		
		$query = $connexion->prepare("UPDATE epiceriebiologique SET article=?,prix=?,idArticle=?,image_location=? WHERE id=?");

		$tableauInfos = [
			$unItem->getId(), $unItem->getArticle(),
			$unItem->getPrix(), $unItem->getIdArticle(), $unItem->getImage_location()];
		return $query->execute($tableauInfos);
    }
	

	static public function supprimer($unItem)
	{
		try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		
		$query = $connexion->prepare("DELETE FROM epiceriebiologique WHERE id=?");
		
		$tableauInfos = [$unItem->getId()];
		return $query->execute($tableauInfos);
	}
}
