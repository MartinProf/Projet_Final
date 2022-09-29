<?php
/* Description : DAO pour la classe articlesepicerie de la BD epiceriebiologique
	Date        : 20-09-22
    Auteur      : Martin Forget / Martin Vézina
	*/

// ****** INLCUSIONS *******
include_once("modeles/DAO/articlesepicerieDAO.interface.php");
include_once("modeles/articlesepicerie.class.php");

// ****** CLASSE ******
class articlesepicerieDAO implements articlesepicerieDAOinterface

{
	public static function chercherArticle($id)
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

	
	static function insererArticle($article)
	{
		try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		
		$query = $connexion->prepare("INSERT INTO articlesepicerie (article,prix,idArticle,image_location) VALUES (?,?,?,?)");
		
		$tableauInfos = [$article->getArticle(), $article->getPrix(), $article->getIdArticle(), $article->getImage_location()];
		return $query->execute($tableauInfos);
	}

	
    static public function modifierArticle($article)
    {
        try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		
		$query = $connexion->prepare("UPDATE articlesepicerie SET article=?,prix=?,idArticle=? WHERE id=?");
		
		$tableauInfos = [$article->getArticle(), $article->getPrix(), $article->getIdArticle(), $article->getId()];
		
		return $query->execute($tableauInfos);
    }
	

	static public function supprimerArticle($id)
	{
		try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		
		$query = $connexion->prepare("DELETE FROM articlesepicerie WHERE id=?");
		
		$tableauInfos = [$id];
		return $query->execute($tableauInfos);
	}
}
