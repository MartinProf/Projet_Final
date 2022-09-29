<?php

	include_once("controleurs/controleurDecouvrir.class.php");
    include_once("controleurs/controleurFonctionnement.class.php");
    include_once("controleurs/controleurBoutique.class.php");
	include_once("controleurs/controleurEnregistrement.class.php");
	include_once("controleurs/controleurAuthentification.class.php");
	include_once("controleurs/controleurAdministration.class.php");
	include_once("controleurs/controleurDeconnexion.class.php");
	include_once("controleurs/controleurEnregisValidation.class.php");

	
	class Epicerie {
		//  Méthode qui crée une instance du controleur associé à l'action
		//  et le retourne
		public static function creerControleur($action) {
			$controleur=null;
			if($action=="fonctionnement"){
            $controleur = new Fonctionnement();
			}
			
			elseif($action=="boutique"){
              $controleur = new Boutique();
			}

			elseif($action=="deconnexion"){
				$controleur = new Deconnexion();
			}

			elseif($action=="authentifier"){
				$controleur = new Authentification();
			}

			elseif($action=="admin"){
				$controleur = new Administration();
			}

			elseif($action=="enregistrer"){
				$controleur = new Enregistrer();
			}

			elseif($action=="enregisValidation"){
				$controleur = new EnregisValidation();
			}

			else{
				$controleur = new Decouvrir();

			}
			return $controleur;
		}
	}
?>