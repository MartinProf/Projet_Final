<?php

	include_once("controleurs/controleurDecouvrir.class.php");
    include_once("controleurs/controleurFonctionnement.class.php");
    include_once("controleurs/controleurBoutique.class.php");

	
	class Manufacture {
		//  Méthode qui crée une instance du controleur associé à l'action
		//  et le retourne
		public static function creerControleur($action) {
			$controleur=null;
			if($action=="fonctionnement"){
            $controleur = new Fonctionnement();


			}elseif($action=="boutique"){
              $controleur = new Boutique();
			}
			
			else{
				$controleur = new Decouvrir();

			}
			return $controleur;
		}
	}
?>