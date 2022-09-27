<?php
    if (isset($_POST['Upload']))           // si formulaire soumis
		 
    {
         // dossier où sera déplacé le fichie
         $Direction_Fichier = 'PROJET_FINAL/images/' ;     

         $Fichier_Temporaire = $_FILES['fichier']['tmp_name'] ;	    		  		 
		 
         if (!is_uploaded_file($Fichier_Temporaire))
		 
    {
         echo "<b>Problème : Le fichier est introuvable ou taille trop importante, 
                           vous êtes limité à 600 Ko. Veuillez recommencer !</b>" ;
         exit ;
    }
         // on vérifie maintenant l'extension
     $Type_du_Fichier = $_FILES['fichier']['type'] ;

     if (!strstr($Type_du_Fichier, 'jpg') && !strstr($Type_du_Fichier, 'jpeg') 
         && !strstr($Type_du_Fichier, 'bmp') && !strstr($Type_du_Fichier, 'gif') 
         && !strstr($Type_du_Fichier, 'png'))
         
{
 
     echo "Problème : Le fichier n'est pas une image</b>" ;	  
     exit ;
     
}
    // on copie le fichier dans le dossier de destination
$Nom_du_Fichier = $_FILES['fichier']['name'] ;

if( !move_uploaded_file($Fichier_Temporaire, $Direction_Fichier . $Nom_du_Fichier))

{

echo "<b>Problème : Impossible de copier le fichier dans " . $Direction_Fichier . "</b>" ;	 
exit ;

}

echo "<b>Votre fichier image a bien été 
         téléchargé dans notre répertoire !</b>" ;
}
if( preg_match('#[\x00-\x1F\x7F-\x9F/\\\\]#', $Nom_du_Fichier))
		 
{

     echo "    Nom de fichier invalide ! " . $Nom_du_Fichier ;
     exit ;

}

     echo "<BR/><BR/>    Fichier envoyé avec succès !" ;
     echo "<BR/><BR/>    Aperçu du contenu du fichier téléchargé :"  
      . $Nom_du_Fichier;
     echo "<BR/> <BR/>";

     echo "<h1>Parcourir les répertoires : </h1>" ;
         $Repertoire_Actuel = "Upload/" ;
		 $dir = opendir($Repertoire_Actuel) ;
		 
		 echo "<BR/>    Le répertoire de téléchargement est : " . $Repertoire_Actuel . "<BR/>" ;
         echo "<BR/>    Liste du répertoire : <BR/> <BR/>" ;
		 
		 while($fichier = readdir($dir))
		 
    {
         echo "$fichier<BR/>" ;
    }
		 
         closedir($dir) ;
?>  