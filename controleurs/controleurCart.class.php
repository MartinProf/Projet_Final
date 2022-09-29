<?php

	include_once("controleurs/controleur.abstract.class.php");
    include_once("modeles/DAO/cartDAO.class.php");

	class cart extends Controleur  {
		
		public function __construct() {
			parent::__construct();
		}

		public function getTabArticles(){
			return $this->tabArticles;
		}
		
		public function executerAction(){

			$id = 0;
			$this->tabArticles = cartDAO::selectParId($id);
			return "cart";
		}
	}	
?>