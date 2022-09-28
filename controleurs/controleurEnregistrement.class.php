<?php
	include_once("controleurs/controleur.abstract.class.php");

	class Enregistrer extends Controleur  {

		public function __construct() {
			parent::__construct();
		}

		public function executerAction(){
			return "enregistrer";
		}
	}
?>