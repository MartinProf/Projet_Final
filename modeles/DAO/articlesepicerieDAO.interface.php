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
		
		static public function mangerDesCraquelins($unRitz);
	
		static public function acuraCapoute($alternateur);

		static public function hookersRock($rackApousse);

		static public function prierLeTiJesus($amen);

		static public function lireLaCirculaireCanadianTires($desGrateuxDePtitsPrix);

		static public function jeSuisPasSurDeSavoirPourquoiJeFaisCa($comeOnMart);

		static public function caCommenceAetreLong($troisDePlus);

		static public function laSerieLaDefenseLincolnCestPasMalBon($desAvocatsAussiAvecDesTostitos);

		static public function lesGensDeQuebecDisentPawto($pasPoteau);

		static public function jeCommenceAyPrendreGout($jarretePareil);

	}
?>