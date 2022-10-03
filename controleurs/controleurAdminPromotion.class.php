<?php

	include_once("controleurs/controleur.abstract.class.php");
    include_once("modeles/DAO/utilisateurDAO.class.php");

	class AdminPromotion extends Controleur  {

		public function __construct() {
			parent::__construct();
		}

		public function executerAction(){
            unset($_SESSION['AjoutErreur']);
            unset($_SESSION['modifierErreur']);
            unset($_SESSION['SupprimerErreur']);
            unset($_SESSION['PromoErreur']);

            if(isset($_POST['courrielPromo'])) $courrielPromo = $_POST['courrielPromo'];
            if(isset($_POST['courrielDevotion'])) $courrielDevotion = $_POST['courrielDevotion'];
            if(isset($_POST['courrielSup'])) $courrielSup = $_POST['courrielSup'];

            if(isset($courrielPromo) && !isset($courrielDevotion) && !isset($courrielSup)){
                $ObjetUsage = utilisateurDAO::chercherUtilisateur($courrielPromo);
                if(!is_null($ObjetUsage)){
                    utilisateurDAO::promoAdminUtilisateur($courrielPromo);
                    $_SESSION['PromoErreur']= '<div class="alert alert-info" role="alert">
                    La modification a été effectué avec succès!</div>';
    
                    header("Location: ?action=admin");
                }else{
                    $_SESSION['PromoErreur']= '<div class="alert alert-danger" role="alert">
                    Le courriel saisie, n\'est pas dans la base de données!</div>';
    
                    header("Location: ?action=admin");
                }
            }else if(!isset($courrielPromo) && isset($courrielDevotion) && !isset($courrielSup)){
                $ObjetUsage = utilisateurDAO::chercherUtilisateur($courrielDevotion);
                if(!is_null($ObjetUsage)){
                    utilisateurDAO::retirerAdminUtilisateur($courrielDevotion);
                    $_SESSION['PromoErreur']= '<div class="alert alert-info" role="alert">
                    La modification a été effectué avec succès!</div>';
    
                    header("Location: ?action=admin");
                }else{
                    $_SESSION['PromoErreur']= '<div class="alert alert-danger" role="alert">
                    Le courriel saisie, n\'est pas dans la base de données!</div>';
    
                    header("Location: ?action=admin");
                }
            }else if(!isset($courrielPromo) && !isset($courrielDevotion) && isset($courrielSup)){
                $ObjetUsage = utilisateurDAO::chercherUtilisateur($courrielSup);
                if(!is_null($ObjetUsage)){
                    utilisateurDAO::supprimerUtilisateur($courrielSup);
                    $_SESSION['PromoErreur']= '<div class="alert alert-info" role="alert">
                    La suppression a été effectué avec succès!</div>';
    
                    header("Location: ?action=admin");
                }else{
                    $_SESSION['PromoErreur']= '<div class="alert alert-danger" role="alert">
                    Le courriel saisie, n\'est pas dans la base de données!</div>';
    
                    header("Location: ?action=admin");
                }
            }else{
                $_SESSION['PromoErreur']= '<div class="alert alert-danger" role="alert">
                Le champ saisie est non conforme!</div>';

                header("Location: ?action=admin");
            }

			return "adminPromotion";
		}
	}	
?>