<?php

	include_once("controleurs/controleur.abstract.class.php");
    include_once("modeles/DAO/articlesepicerieDAO.class.php");
    include_once("modeles/DAO/utilisateurDAO.class.php");
    include_once("modeles/utilisateur.class.php");
    include_once("modeles/articlesepicerie.class.php");

	class AuthenVerif extends Controleur  {

		public function __construct() {
			parent::__construct();
		}

		public function executerAction(){
            unset($_SESSION['Aerreur']);
            $leCourriel = $_POST['authEmail'];
            $leMotPasse = $_POST['authPwd'];

            $lInventaire = articlesepicerieDAO::chercherTous();
            $leUser = utilisateurDAO::chercherUtilisateur($leCourriel);

            if(isset($leUser)){
                $leHash = $leUser->getPassword();
                $estAdmin = $leUser->getAdmin();
            }
 
            if(!isset($leCourriel) || !isset($leMotPasse) || $leUser == null){
                $_SESSION['Aerreur'] = '<div class="alert alert-danger" role="alert">
                Les données saisies sont erronées!</div>';

                header('Location: ?action=authentifier');

            }elseif (!password_verify($leMotPasse,$leHash)) {
                $_SESSION['Aerreur'] = '<div class="alert alert-danger" role="alert">
                Le mot de passe est invalide!</div>';

                header('Location: ?action=authentifier');

            }elseif(isset($leCourriel) && isset($leMotPasse)){
                if (password_verify($leMotPasse, $leHash)) {
                    if($estAdmin == 1){
                        $_SESSION['role'] = 'admin';
                    }else $_SESSION['role'] = 'user';
                }
                
                for ($i=0; $i < count($lInventaire); $i++) { 
                    setcookie($lInventaire[$i]->getId(),0);
                }
                setcookie($leCourriel, "Commande:");
                $_SESSION['courriel'] = $leCourriel;
                
                unset($_SESSION['Aerreur']);

                header("Location: ?action=decouvrir");
            }
			
			return "authenVerif";
		}
	}
?>