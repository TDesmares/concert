<?php
//inclusion des instruction de connexion
require_once("connexionbdd.php");

if (isset($_POST)){
// Récupération des données du formulaire par paramètres POST et mises dans des variables
	$titrescen = $_POST['titrescen'];
	$curseur1  = $_POST['curseur1'];
  $description1 = $_POST['description1'];


//préparation de la requete et insertion dans une variable $requete
    $requete = sprintf("INSERT INTO hi_scenario (idscen, iddebat, titrescen, descscen) VALUES (NULL, '%s','%s','%s')",
		mysqli_real_escape_string($connexion, $titrescen),
		mysqli_real_escape_string($connexion, $curseur1),
		mysqli_real_escape_string($connexion, $description1));

//envoi de la requete
	$result = mysqli_query($connexion,$requete);

	//gestion de l'erreur
	if(!$result){

			die("Problème :".mysqli_error($connexion));
			header('Location: creerprojet.php');
		}
	else {
		header('Location: maps.php');
		exit;
}
}

?>
