<?php
	include_once("controleurs/controleur.abstract.class.php");
    include_once("modeles/DAO/utilisateurDAO.class.php");

	class EnregisValidation extends Controleur  {

		public function __construct() {
			parent::__construct();
		}

		public function executerAction(){
            $leCourriel = $_POST['email'];
            $leMotPasse = $_POST['pwd'];
            $laVerification = $_POST['pwdVerify'];
            $existantDansBBD = utilisateurDAO::chercherUtilisateur($leCourriel);

            if(!isset($leCourriel) || $leCourriel == null){
                echo "<h1>La saisie du courriel de n'a pas été fait convenablement</h1>";
                header('Location: ?action=enregistrer');
            };
            if(!isset($leMotPasse) || $leMotPasse == null){
                echo "<h1>La saisie du mots de passe n'a pas été fait convenablement</h1>";
                header('Location: ?action=enregistrer');
            };
            if(!isset($laVerification) || $laVerification == null){
                echo "<h1>La saisie du courriel de vérification n'a pas été fait convenablement</h1>";
                header('Location: vues/enregistrer.php');
            };
            if($existantDansBBD == 1){
                echo "<h1>Le courriel saisie existe déjà dans nos bases de données</h1>";
                header('Location: ?action=enregistrer');
            }

			return "enregisValidation";
		}
	}
?>