<?php

//inclusion des instruction de connexion;
require_once("connexionbdd.php");

if (isset($_POST)){
        // Récupération des données du formulaire par paramètres POST et mises dans une variable
	$titreprojet = $_POST['nomprojet'];
  $descriptionprojet = $_POST['descprojet'];
	$nombrescenario  = $_POST['nombre_scenario'];
	$imgdebat = $_POST['fileToUpload'];

	/*$email = $_POST['email'];
	$image = $_POST['imguser'];*/

//préparation de la requete et insertion dans une variable $requete
    $requete = sprintf("INSERT INTO hi_debat (iddebat, titreprojet, descgen, nbscenario, imgmap) VALUES (NULL,'%s','%s','%s','%s')",
		mysqli_real_escape_string($connexion, $titreprojet),
		mysqli_real_escape_string($connexion, $descriptionprojet),
		mysqli_real_escape_string($connexion, $nombrescenario),
		mysqli_real_escape_string($connexion, $imgdebat));

//envoi de la requete
	$result = mysqli_query($connexion,$requete);

	//gestion de l'erreur
	if(!$result){

			die("Problème :".mysqli_error($connexion));
			header('Location: creerprojet.php');
		}
	else {
		header('Location: scenarios.php');
		exit;
}
}
?>
