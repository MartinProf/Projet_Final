<?php
	/* Description : interface pour tous les DAO
	 * Date        : 20-09-22
     * Auteur      : Martin Forget / Martin Vézina
	*/

	// ****** INLCUSIONS *******
	include_once('modeles/DAO/connexionBD.class.php');

	// ****** INTERFACE *******
	interface DAO {	
		
		static public function chercher($id);

		static public function chercherTous();

		static public function rechercheFiltree($filtre);

		static public function inserer($unItem);

		static public function modifierUnParam($id);
                
        static public function modifierTout($unItem);

		static public function supprimer($id);
	}
?>