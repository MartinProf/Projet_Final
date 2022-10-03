<?php
/* Description : DAO pour la classe utilisateur de la BD epiceriebiologique
	Date        : 20-09-22
    Auteur      : Martin Forget / Martin Vézina
	*/

// ****** INLCUSIONS *******
include_once("modeles/DAO/utilisateurDAO.interface.php");
include_once("modeles/utilisateur.class.php");

// ****** CLASSE ******
class utilisateurDAO implements utilisateurDAOinterface
{
	public static function chercherUtilisateur($email)
	{
		try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		
		$utilisateur = null;

		$query = $connexion->prepare("SELECT * FROM utilisateur WHERE courriel=?");
		
		$query->execute(array($email));

		if ($query->rowCount() != 0) {
			$enr = $query->fetch();
			$utilisateur = new utilisateur(
				$enr['idUtilisateur'],
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
		return $utilisateur;
	}
	
	static function ajouterUtilisateur($utilisateur)
	{
		try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		
		$query = $connexion->prepare("INSERT INTO utilisateur (courriel,password,admin) VALUES (?,?,?)");
		
		$tableauInfos = [$utilisateur->getCourriel(), $utilisateur->getPassword(), $utilisateur->getAdmin()];

		return $query->execute($tableauInfos);
	}

	static public function supprimerUtilisateur($courriel)
	{
		try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		
		$query = $connexion->prepare("DELETE FROM utilisateur WHERE courriel=?");
		
		$tableauInfos = [$courriel];
		return $query->execute($tableauInfos);
	}

	static public function promoAdminUtilisateur($email)
	{
		try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}

		$query = $connexion->prepare("UPDATE utilisateur SET admin=1 WHERE courriel=?");
		
		$tableauInfos = [$email];
		
		return $query->execute($tableauInfos);
	}

	static public function retirerAdminUtilisateur($email)
	{
		try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}

		$query = $connexion->prepare("UPDATE utilisateur SET admin=0 WHERE courriel=?");
		
		$tableauInfos = [$email];
		
		return $query->execute($tableauInfos);
	}
	
}
