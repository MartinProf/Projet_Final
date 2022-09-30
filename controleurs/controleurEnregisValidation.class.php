<?php
	include_once("controleurs/controleur.abstract.class.php");
    include_once("modeles/DAO/utilisateurDAO.class.php");
    include_once("modeles/utilisateur.class.php");

	class EnregisValidation extends Controleur  {

		public function __construct() {
			parent::__construct();
		}

		public function executerAction(){
            $leCourriel = $_POST['email'];
            $_SESSION['leCourriel']= $leCourriel;
            $leMotPasse = $_POST['pwd'];
            $_SESSION['leMotPasse'] = $leMotPasse;
            $laVerification = $_POST['pwdVerify'];
            $_SESSION['laVerification']=$laVerification;
            $existantDansBDD = utilisateurDAO::chercherUtilisateur($leCourriel);
            $_SESSION['utilisateur'] = $existantDansBDD;

            if(!isset($leCourriel) || $leCourriel == null){
                $_SESSION['erreur'] = '<div class="alert alert-danger" role="alert">
                La saisie du courriel de n\'a pas été fait convenablement!</div>';

                header('Location: ?action=enregistrer');
            }
            else if(!isset($leMotPasse) || $leMotPasse == null){
                $_SESSION['erreur'] = '<div class="alert alert-danger" role="alert">
                La saisie du mots de passe n\'a pas été fait convenablement!</div>';

                header('Location: ?action=enregistrer');
            }
            else if(!isset($laVerification) || $laVerification == null){
                $_SESSION['erreur'] = '<div class="alert alert-danger" role="alert">
                La saisie du courriel de vérification n\'a pas été fait convenablement!</div>';

                header('Location: ?action=enregistrer');
            }
            else if(!isset($existantDansBDD) || $existantDansBDD == null){
                $_SESSION['erreur'] = '<div class="alert alert-primary" role="alert">
                Le courriel saisie existe déjà dans nos bases de données!</div>';

                header('Location: ?action=enregistrer');

            }else if($existantDansBDD->getCourriel() == $leCourriel){
                $_SESSION['erreur'] = '<div class="alert alert-primary" role="alert">
                Le courriel saisie existe déjà dans nos bases de données!</div>';
    
                header('Location: ?action=enregistrer');

            }else {
                $nouvelleUtilisateur = new utilisateur($leCourriel, $leMotPasse, 0);
                utilisateurDAO::ajouterUtilisateur($nouvelleUtilisateur);

                header("Location: ?action=authentifier");
            }

			return "enregisValidation";
		}
	}
?>