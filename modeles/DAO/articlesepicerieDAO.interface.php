<?php
	/* Description : interface pour articlesepicerie DAO
	 * Date        : 20-09-22
     * Auteur      : Martin Forget / Martin Vézina
	*/

	// ****** INLCUSIONS *******
	include_once('modeles/DAO/connexionBD.class.php');

	// ****** INTERFACE *******
	interface articlesepicerieDAOinterface {	
		
		static public function chercherArticle($id);
		static public function chercherTous();
		static public function insererArticle($article);
        static public function modifierArticle($article);
		static public function supprimerArticle($id);
	}
?>