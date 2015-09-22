<?php
//parametres de connexion

$serveurbdd="localhost";
$compte="root";
$mdp="dn9a4u8n";
$bdd="projetdebat";

//connexion BDD
$connexion=mysqli_connect($serveurbdd,$compte,$mdp,$bdd);

//gestion des erreurs
if(mysqli_connect_errno()) {
	die("echec de connexion : ".mysqli_connect_error());

}
?>
