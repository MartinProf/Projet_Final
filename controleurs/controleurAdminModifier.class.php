<?php

	include_once("controleurs/controleur.abstract.class.php");
    include_once("modeles/DAO/articlesepicerieDAO.class.php");
    include_once("modeles/articlesepicerie.class.php");

	class AdminModifier extends Controleur  {

		public function __construct() {
			parent::__construct();
		}

		public function executerAction(){
            unset($_SESSION['AjoutErreur']);
            unset($_SESSION['modifierErreur']);
            unset($_SESSION['SupprimerErreur']);
            unset($_SESSION['PromoErreur']);

            if(isset($_POST['idModifier'])){
                $idModifie =  $_POST['idModifier'];
            }else{
                $_SESSION['AjoutErreur']= '<div class="alert alert-danger" role="alert">
                L\'ID de article n\'a pas été saisie!</div>';

                header("Location: ?action=admin");
            }

            $ancienArticle = articlesepicerieDAO::chercherArticle($idModifie);
            if(is_null($ancienArticle)){
                $_SESSION['AjoutErreur']= '<div class="alert alert-danger" role="alert">
                L\'ID de article n\'est pas dans la basse de données!</div>';

                header("Location: ?action=admin");
            }

            if(isset($_POST['articleModifier'])){
                $articleModifie =  $_POST['articleModifier'];
            }else{
                $_SESSION['AjoutErreur']= '<div class="alert alert-danger" role="alert">
                L\'article n\'a pas été saisi!</div>';

                header("Location: ?action=admin");
            }

            if(isset($_POST['prixModifier'])){
                $prixModifie =  $_POST['prixModifier'];
            }else{
                $_SESSION['AjoutErreur']= '<div class="alert alert-danger" role="alert">
                Le prix n\'a pas été saisi!</div>';

                header("Location: ?action=admin");
            }

            if(isset($_POST['idArticleModifier']) && $_POST['idArticleModifier']>0 && $_POST['idArticleModifier'] <5){
                $idArticleModifie =  $_POST['idArticleModifier'];
            }else{
                $_SESSION['AjoutErreur']= '<div class="alert alert-danger" role="alert">
                Le ID de l\'article n\'a pas été saisi!</div>';

                header("Location: ?action=admin");
            }

            if(isset($idModifie,$articleModifie,$prixModifie,$idArticleModifie)){
                $nouveauArticle = new articlesepicerie($ancienArticle->getId(), $articleModifie,$prixModifie,$idArticleModifie, $ancienArticle->getImage_location());
                articlesepicerieDAO::modifierArticle($nouveauArticle);
                $_SESSION['AjoutErreur']= '<div class="alert alert-info" role="alert">
                L\'article '. $articleModifie .' a été modifié!</div>';

                header("Location: ?action=admin");
            }

			return "adminModifier";
		}
	}
?>