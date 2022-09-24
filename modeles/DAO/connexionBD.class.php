<?php
	/* Description : classe de connexion à la BD
	 * Date        : 20-09-22
     * Auteur      : Martin Forget / Martin Vézina
	*/

	// ****** INLCUSIONS *******
	include_once('modeles/DAO/configs/configBD.interface.php');
	
	// ********* Classe englobante de PDO *************
	class ConnexionBD  {

        private static $instance=null;

		private function __construct() {}

		public static function getInstance() {
			 if (self::$instance==null) {
				$configuration="mysql:host=".ConfigBD::BD_HOTE.";dbname=".ConfigBD::BD_NOM;
				$utilisateur=ConfigBD::BD_UTILISATEUR;
				$motPasse=ConfigBD::BD_MOT_PASSE;
				
				self::$instance=new PDO($configuration,$utilisateur,$motPasse);	
				
				self::$instance->exec("SET character_set_results = 'utf8'");	
				self::$instance->exec("SET character_set_client = 'utf8'");	
				self::$instance->exec("SET character_set_connection = 'utf8'");	
			}
        return self::$instance;
		}	  
		public static function close() {
			self::$instance=null;
		}
	}
?>