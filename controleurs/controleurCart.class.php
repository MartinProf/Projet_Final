<?php

	include_once("controleurs/controleur.abstract.class.php");
	include_once("modeles/DAO/articlesepicerieDAO.class.php");
	include_once("modeles/articlesepicerie.class.php");

	class Cart extends Controleur  {
		
		public function __construct() {
			parent::__construct();
		}
		
		public function executerAction(){
			$tableauArticles = articlesepicerieDAO::chercherTous();
						
			/*for ($i=0; $i < count($tableauArticles); $i++){
				$_COOKIE['article'.$tableauArticles[$i]->getId()];
				
			}*/
			return "cart";
		}
	}	
?>