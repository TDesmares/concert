<?php
//inclusion des instruction de connexion;
require_once("connexionbdd.php");

if(isset($_GET['connexion'])) {
	$recup_connexion=$_GET['connexion'];

	}

//implementation des variables de session
	session_start();
	//gestion date
	date_default_timezone_set('Europe/Paris');
?>
<!DOCTYPE html>
<html>
<head>
<title>Connexion</title>
<meta charset="utf-8"/>
<link type="text/css" rel="stylesheet" href="css/style.css" />

</head>

<body>
<a href="index.php">
<div id="bouton_retour">Accueil</div>
</a>

<div id="boutons_connexion">
	<h1>Connexion</h1>
	<form name="connexion" method="post" action="connexion.php">
		<fieldset>
			<legend>Rentrez vos login et mot de passe</legend>

	<p> Utilisateur : <input type="text" name="user" value"" /><br />
	Mot de passe : <input type="text" name="mdp" value"" /></p>
		</fieldset>

	<input type="submit" value"Se connecter" />
	</form>

</div>

</body>
</html>
