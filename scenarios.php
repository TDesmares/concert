<!DOCTYPE html>
<html>
<meta charset="utf-8_general_ci">
<head><title> les scenarios du projet</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php include("menu.php");
include("donnee_scenarios.php");

//inclusion des instruction de connexion;
require_once("connexionbdd.php");

if (isset($_POST)){
        // Récupération des données du formulaire par paramètres POST et mises dans une variable
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
		header('Location: projet.php');
		exit;
}
}

?>

<h1>Vos scenarios</h1>
<form method="post" action="scenarios.php" enctype="multipart/form-data">
<fieldset>
	 <legend> Rentrez vos scenarii:</legend>
		<p>Titre scenario <?php echo $nombrescenario; ?>:
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
