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
            $leCourriel = $_POST['authEmail'];
            $_SESSION['AleCourriel'] = $leCourriel;

            $leMotPasse = $_POST['authPwd'];
            $_SESSION['AleMotPasse'] = $leMotPasse;

            $leUser = utilisateurDAO::chercherUtilisateur($leCourriel);
            $_SESSION['ApwdBDD'] = $leUser->__toString();

            $lInventaire = articlesepicerieDAO::chercherTous();
            $leHash = $leUser->getPassword();
            $_SESSION['hash'] = $leHash;
            $estAdmin = $leUser->getAdmin();
 
            if(!isset($leCourriel) || !isset($leMotPasse) || $leUser == null){
                $_SESSION['Aerreur'] = '<div class="alert alert-danger" role="alert">
                Les données saisies sont erronées!</div>';

                header('Location: ?action=authentifier');

            }elseif (!password_verify($leMotPasse,$leHash)) {
                $_SESSION['Aerreur'] = '<div class="alert alert-danger" role="alert">
                Le mot de passe est invalide!</div>';
                $leHashDuPasswordPOST = password_hash($leMotPasse, PASSWORD_DEFAULT);
                $_SESSION['leHashDuPasswordPOST']=$leHashDuPasswordPOST;

                header('Location: ?action=authentifier');

            }elseif(isset($leCourriel) && isset($leMotPasse)){
                if (password_verify($leMotPasse, $leHash)) {
                    if($estAdmin == 1){
                        $_SESSION['role'] = 'admin';
                    }else $_SESSION['role'] = 'user';
                }
                for ($i=0; $i < count($lInventaire); $i++) { 
                    $lInventaire[$i]->getId();
                    $_SESSION['article'.$lInventaire[$i]->getId()] = 0;
                }
                unset($_SESSION['Aerreur']);
                unset($_SESSION['AleCourriel']);
                unset($_SESSION['AleMotPasse']);
                unset($_SESSION['ApwdBDD']);

                header("Location: ?action=decouvrir");
            }
			
			return "authenVerif";
		}
	}
?>