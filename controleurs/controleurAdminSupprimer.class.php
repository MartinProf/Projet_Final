<?php

	include_once("controleurs/controleur.abstract.class.php");
    include_once("modeles/DAO/articlesepicerieDAO.class.php");

	class AdminSupprimer extends Controleur  {

		public function __construct() {
			parent::__construct();
		}

		public function executerAction(){
            unset($_SESSION['AjoutErreur']);
            unset($_SESSION['modifierErreur']);
            unset($_SESSION['SupprimerErreur']);
            unset($_SESSION['PromoErreur']);

            if(isset($_POST['idSupprimer'])){
                $idASupprimer =  $_POST['idSupprimer'];
            }else{
                $_SESSION['SupprimerErreur']= '<div class="alert alert-danger" role="alert">
                L\'ID de article n\'a pas été saisie correctement!</div>';

                header("Location: ?action=admin");
            }

            $articleASupprimer = articlesepicerieDAO::chercherArticle($idASupprimer);

            if(is_null($articleASupprimer)){
                $_SESSION['SupprimerErreur']= '<div class="alert alert-danger" role="alert">
                L\'ID de article à supprimer n\'est pas dans la base de données!</div>';

                header("Location: ?action=admin");
            }else{
                articlesepicerieDAO::supprimerArticle($idASupprimer);
                $_SESSION['SupprimerErreur']= '<div class="alert alert-info" role="alert">
                L\'article '. $articleASupprimer->getArticle() .' à été supprimer!</div>';

                header("Location: ?action=admin");
            }

			return "adminSupprimer";
		}
	}	
?>