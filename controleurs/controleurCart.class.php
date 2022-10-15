<?php

	include_once("controleurs/controleur.abstract.class.php");
	include_once("modeles/DAO/articlesepicerieDAO.class.php");
	include_once("modeles/articlesepicerie.class.php");

	class Cart extends Controleur  {

		
		public function __construct() {
			parent::__construct();
		}
		
		public function executerAction(){
						
			return "cart";
		}
	}	
?>