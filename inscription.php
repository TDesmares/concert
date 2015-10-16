<?php

//inclusion des instruction de connexion;
require_once("connexionbdd.php");

if (isset($_POST)){
        // Récupération des données du formulaire par paramètres POST et mises dans une variable
	$login = $_POST['login'];
   $nom = $_POST['nom'];
	$prenom  = $_POST['username'];
	$pseudo = $_POST['pseudo'];
	$motdepasse = $_POST['password'];
	/*$email = $_POST['email'];
	$image = $_POST['imguser'];*/

//préparation de la requete et insertion dans une variable $requete
    $requete = sprintf("INSERT INTO hi_participant (iduser, login, name, surname, pseudo, mdp) VALUES (NULL,'%s','%s','%s','%s','%s')",
		mysqli_real_escape_string($connexion, $login),
		mysqli_real_escape_string($connexion, $nom),
		mysqli_real_escape_string($connexion, $prenom),
		mysqli_real_escape_string($connexion, $pseudo),
		mysqli_real_escape_string($connexion, $motdepasse));

//envoi de la requete
	$result = mysqli_query($connexion,$requete);

	//gestion de l'erreur
	if(!$result){

			die("Problème :".mysqli_error($connexion));
			header('Location: creercompte.php');
		}
	else {
		header('Location: principal.php');
		exit;
}
}
?>
