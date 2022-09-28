<?php

	include_once("controleurs/controleur.abstract.class.php");

	class Deconnexion extends Controleur  {

		public function __construct() {
			parent::__construct();
		}

		public function executerAction(){
			
            $_SESSION['role'] = 'guess';

            return "decouvrir";
		}

	}	
?>