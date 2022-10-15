<?php
	/* Description : interface pour cart DAO
	 * Date        : 20-09-22
     * Auteur      : Martin Forget / Martin Vézina
	*/

	// ****** INLCUSIONS *******
	include_once('modeles/DAO/connexionBD.class.php');

	// ****** INTERFACE *******
	interface commandeDAOinterface {

        static public function envoieCommande($email, $commande);

    }