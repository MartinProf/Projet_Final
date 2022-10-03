<?php
	/* Description : interface pour utilisateur DAO
	 * Date        : 20-09-22
     * Auteur      : Martin Forget / Martin Vézina
	*/

	// ****** INLCUSIONS *******
	include_once('modeles/DAO/connexionBD.class.php');

	// ****** INTERFACE *******
	interface utilisateurDAOinterface {	

		static public function chercherUtilisateur($email);
        static public function ajouterUtilisateur($utilisateur);
        static public function supprimerUtilisateur($utilisateur);
		static public function promoAdminUtilisateur($email);
		static public function retirerAdminUtilisateur($email);
	}
?>