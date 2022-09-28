<?php

	include_once("controleurs/controleur.abstract.class.php");

	class Authentification extends Controleur  {

		public function __construct() {
			parent::__construct();
		}

		public function executerAction(){
			
			$_SESSION['role']= 'admin';
			//header("Location: Index.php?admin&action=boutique");

			return "boutique";
		}
	}
?>