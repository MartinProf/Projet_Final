<?php

	include_once("controleurs/controleur.abstract.class.php");
	include_once("modeles/DAO/articlesepicerieDAO.class.php");

	class Administration extends Controleur  {

		public function __construct() {
			parent::__construct();
		}

		public function getTabArticles(){
			return $this->tabArticles;
		}

		public function executerAction(){
			return "admin";
		}
	}	
?>