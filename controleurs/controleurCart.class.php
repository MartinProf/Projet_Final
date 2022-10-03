<?php

	include_once("controleurs/controleur.abstract.class.php");
    include_once("modeles/DAO/cartDAO.class.php");

	class cart extends Controleur  {
		
		public function __construct() {
			parent::__construct();
		}
		
		public function executerAction(){

			return "cart";
		}
	}	
?>