<?php

include("menu.php");
include("donnee_scenarios.php");

//inclusion des instruction de connexion
require_once("connexionbdd.php");
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8_general_ci">
<title> les scenarios du projet</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
</head>
<body>

<h1>Vos scenarios</h1>
<form method="post" action="script-scenarios.php" enctype="multipart/form-data">
<fieldset>
	 <legend> Rentrez vos scenarii:</legend>
		<p>Titre scenario:
		<input type="text" name="titrescen" value"" /><br />
		Positionner dans le temps votre projet <br />
		<input type="range" name="curseur1" min="1" max="100" step:"1" value"" /><br />
		<textarea name="description1" value=""></textarea>

		</p>

		<p>Titre scenario 2 :
		<input type="text" name="pseudo" min="1" max="100" step:"1" value"" /><br />
		Positionner dans le temps votre projet <br />
		<input type="range" name="curseur2" min="1" max="100" step:"1" value"" /><br />
		<textarea name="description2" value=""></textarea>
		</p>

		<p>Titre scenario 3 :
		<input type="text" name="mdp" min="1" max="100" step:"1" value"" /><br />
		<input type="range" name="curseur3" min="1" max="100" step:"1" value"" /><br />
		<textarea name="description3" value=""></textarea>
		</p>

		<input style="margin-left:100px;" type="submit" value"Se connecter" />
		<input style="margin-left:100px;" type="reset" value"Annuler" />

	</fieldset>
</form>
</body>
</html>
