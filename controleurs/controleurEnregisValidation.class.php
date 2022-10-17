<?php
	include_once("controleurs/controleur.abstract.class.php");
    include_once("modeles/DAO/utilisateurDAO.class.php");
    include_once("modeles/utilisateur.class.php");

	class EnregisValidation extends Controleur  {

		public function __construct() {
			parent::__construct();
		}

		public function executerAction(){
            unset($_SESSION['Eerreur']);
            $leCourriel = htmlentities($_POST['email']);
            $leMotPasse = htmlentities($_POST['pwd']);
            $laVerification = htmlentities($_POST['pwdVerify']);
            
            $existantDansBDD = utilisateurDAO::chercherUtilisateur($leCourriel);

            if(!isset($leCourriel) || $leCourriel == null){
                $_SESSION['Eerreur'] = '<div class="alert alert-danger" role="alert">
                La saisie du courriel de n\'a pas été faite convenablement!</div>';

                header('Location: ?action=enregistrer');
            }
            else if(!isset($leMotPasse) || $leMotPasse == null){
                $_SESSION['Eerreur'] = '<div class="alert alert-danger" role="alert">
                La saisie du mots de passe n\'a pas été faite convenablement!</div>';

                header('Location: ?action=enregistrer');
            }
            else if(!isset($laVerification) || $laVerification == null){
                $_SESSION['Eerreur'] = '<div class="alert alert-danger" role="alert">
                La saisie du courriel de vérification n\'a pas été faite convenablement!</div>';

                header('Location: ?action=enregistrer');
            }else if($existantDansBDD != null){
                $_SESSION['Eerreur'] = '<div class="alert alert-primary" role="alert">
                Le courriel saisie existe déjà dans nos bases de données!</div>';

                header('Location: ?action=enregistrer');

            }elseif ($leMotPasse != $laVerification) {
                $_SESSION['Eerreur'] = '<div class="alert alert-primary" role="alert">
                Les mots de passe saisies ne sont pas identiques!</div>';

                header('Location: ?action=enregistrer');
            }else {
                $motPasseHashed = password_hash($leMotPasse, PASSWORD_DEFAULT);
                $nouvelUtilisateur = new utilisateur($leCourriel, $motPasseHashed, 0);
                utilisateurDAO::ajouterUtilisateur($nouvelUtilisateur);

                unset($_SESSION['Eerreur']);

                header("Location: ?action=authentifier");
            }

			return "enregisValidation";
		}
	}
?>