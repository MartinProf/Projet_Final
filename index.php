<?php
session_start();
if(!isset($_SESSION['role'])) $_SESSION['role'] = 'guess';  //guess user admin

$titre = "Épicerie biologique";
$nav = "decouvrir";

include_once "controleurs/controleurEpicerie.class.php";
require "vues/inc/entete.inc.php";


if (!isset($_GET['action'])) {

	$action = "";
} else {
	$action = $_GET['action'];
}

$controleur = Epicerie::creerControleur($action);

$nomVue = $controleur->executerAction();

include_once("vues/" . $nomVue . ".php");

require "vues/inc/piedPage.inc.php";
?>
