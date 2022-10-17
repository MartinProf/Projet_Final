<?php

	include_once("controleurs/controleur.abstract.class.php");
    include_once("modeles/DAO/articlesepicerieDAO.class.php");
    include_once("modeles/articlesepicerie.class.php");

	class AdminAjouter extends Controleur  {

		public function __construct() {
			parent::__construct();
		}

		public function executerAction(){
            unset($_SESSION['AjoutErreur']);
            unset($_SESSION['modifierErreur']);
            unset($_SESSION['SupprimerErreur']);
            unset($_SESSION['PromoErreur']);

            if(isset($_POST['articleAjouter'])){
                $articleAjoute =  $_POST['articleAjouter'];
            }else{
                $_SESSION['AjoutErreur']= '<div class="alert alert-danger" role="alert">
                L\'article n\'a pas été saisie!</div>';

                header("Location: ?action=admin");
            }

            if(isset($_POST['prixAjouter'])){
                $prixAjoute =  $_POST['prixAjouter'];
            }else{
                $_SESSION['AjoutErreur']= '<div class="alert alert-danger" role="alert">
                Le prix saisi est invalide!</div>';

                header("Location: ?action=admin");
            }

            if(isset($_POST['idArticleAjouter']) && $_POST['idArticleAjouter']>0 && $_POST['idArticleAjouter']<5){
                $idArticleAjoute =  $_POST['idArticleAjouter'];
            }else{
                $_SESSION['AjoutErreur']= '<div class="alert alert-danger" role="alert">
                La catégorie d\'article n\'a pas été saisie correctement!</div>';

                header("Location: ?action=admin");
            }

            $Direction_Fichier = 'images/';

            if (isset($_POST['Upload'])){
                $Fichier_Temporaire = $_FILES['fichier']['tmp_name'];
                if (!is_uploaded_file($Fichier_Temporaire)){
                    $_SESSION['AjoutErreur']= "<b>Problème : Le fichier est introuvable ou taille trop importante, vous êtes limité à 600 Ko. Veuillez recommencer !</b>" ;
                    
                    header("Location: ?action=admin");
                }

                
                $Type_du_Fichier = $_FILES['fichier']['type'];
                if (!strstr($Type_du_Fichier, 'jpg') && !strstr($Type_du_Fichier, 'jpeg') 
                    && !strstr($Type_du_Fichier, 'bmp') && !strstr($Type_du_Fichier, 'gif') 
                    && !strstr($Type_du_Fichier, 'png')){
                    $_SESSION['AjoutErreur']= "Problème : Le fichier n'est pas une image</b>" ;	  
                    
                    header("Location: ?action=admin");
                }

                
                $Nom_du_Fichier = $_FILES['fichier']['name'];
                if( !move_uploaded_file($Fichier_Temporaire, $Direction_Fichier . $Nom_du_Fichier)){
                    $_SESSION['AjoutErreur']= "<b>Problème : Impossible de copier le fichier dans " . $Direction_Fichier . "</b>" ;	 
                    
                    header("Location: ?action=admin");
                }
            }

            if(preg_match('#[\x00-\x1F\x7F-\x9F/\\\\]#', $Nom_du_Fichier)){
                $_SESSION['AjoutErreur']= "Nom de fichier invalide ! " . $Nom_du_Fichier;

                header("Location: ?action=admin");
            }else{
                $nomDuFichier = 'images/'.$Nom_du_Fichier;
                $article = new articlesepicerie($articleAjoute, $prixAjoute, $idArticleAjoute, $nomDuFichier);
                articlesepicerieDAO::insererArticle($article);

                $_SESSION['AjoutErreur']= '<div class="alert alert-info" role="alert">
                L\'article '. $articleAjoute .' a été ajouté à l\'inventaire!</div>';

                header("Location: ?action=admin");
            }

			return "adminAjouter";
		}
	}	
?>