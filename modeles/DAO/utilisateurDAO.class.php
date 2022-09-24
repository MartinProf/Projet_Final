<?php
/* Description : DAO pour la classe utilisateur de la BD epiceriebiologique
	Date        : 20-09-22
    Auteur      : Martin Forget / Martin Vézina
	*/

// ****** INLCUSIONS *******
include_once("modeles/DAO/DAO.interface.php");
include_once("modeles/utilisateur.class.php");

// ****** CLASSE ******
class utilisateurDAO implements DAO
{
	public static function chercher($id)
	{
		try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		
		$unUtilisateur = null;

		$query = $connexion->prepare("SELECT * FROM utilisateur WHERE id=?");
		
		$query->execute(array($id));

		if ($query->rowCount() != 0) {
			$enr = $query->fetch();
			$unUtilisateur = new utilisateur(
				$enr['id'],
				$enr['nom'],
				$enr['prenom'],
                $enr['pseudo'],
				$enr['courriel'],
                $enr['password'],
                $enr['admin']
			);
		}
		
		$query->closeCursor();		
		ConnexionBD::close();		
		return $unUtilisateur;
	}

	
	static public function chercherTous()
	{
		try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		
		$tableau = [];
		$query = $connexion->prepare("SELECT * FROM utilisateur");
		$query->execute();
		
		foreach ($query as $enr) {
			$unUtilisateur = new utilisateur(
				$enr['id'],
				$enr['nom'],
				$enr['prenom'],
                $enr['pseudo'],
				$enr['courriel'],
                $enr['password'],
                $enr['admin']
			);															
			array_push($tableau, $unUtilisateur);
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
		$query = $connexion->prepare("SELECT * FROM utilisateur " . $filtre);
		$query->execute();
		
		foreach ($query as $enr) {
			$unUtilisateur = new utilisateur(
				$enr['id'],
				$enr['nom'],
				$enr['prenom'],
                $enr['pseudo'],
				$enr['courriel'],
                $enr['password'],
                $enr['admin']
			);
																			
			array_push($tableau, $unUtilisateur);
		}

		$query->closeCursor();
		ConnexionBD::close();
		return $tableau;
	}


	static function inserer($unUtilisateur)
	{
		try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		
		$query = $connexion->prepare("INSERT INTO utilisateur (nom,prenom,pseudo,courriel,password,admin) VALUES (?,?,?,?,?,?)");
		
		$tableauInfos = [$unUtilisateur->getNom(), $unUtilisateur->getPrenom(), $unUtilisateur->getPseudo(), $unUtilisateur->getCourriel(), $unUtilisateur->getPassword(), $unUtilisateur->getAdmin()];
		return $query->execute($tableauInfos);
	}

	
	static public function modifierUnParam($unUtilisateur)
	{
		try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		
		$query = $connexion->prepare("UPDATE utilisateur SET password=? WHERE id=?");

		$tableauInfos = [
			$unUtilisateur->getId(), $unUtilisateur->getNom(),
			$unUtilisateur->getPrenom(), $unUtilisateur->getPseudo(), $unUtilisateur->getCourriel(),$unUtilisateur->getPassword(), $unUtilisateur->getAdmin()];
		return $query->execute($tableauInfos);
	}


    static public function modifierTout($unUtilisateur)
    {
        try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		
		$query = $connexion->prepare("UPDATE utilisateur SET nom=?,prenom=?,pseudo=?,courriel=?, password=?, admin=?  WHERE id=?");

		$tableauInfos = [
			$unUtilisateur->getId(), $unUtilisateur->getNom(),
			$unUtilisateur->getPrenom(), $unUtilisateur->getPseudo(), $unUtilisateur->getCourriel(),$unUtilisateur->getPassword(), $unUtilisateur->getAdmin()];
		return $query->execute($tableauInfos);
    }
	

	static public function supprimer($unUtilisateur)
	{
		try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		
		$query = $connexion->prepare("DELETE FROM utilisateur WHERE id=?");
		
		$tableauInfos = [$unUtilisateur->getId()];
		return $query->execute($tableauInfos);
	}
}
