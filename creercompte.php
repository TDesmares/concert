<?php



?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8"/>
<link type="text/css" rel="stylesheet" href="css/style.css" />

</head>
<body>



<div id="boutons_connexion">
	<h1>créer un compte</h1>
	<?php
	//affiche pour test du formulaire quelques unes des variables
    echo ("Bonjour ".stripSlashes($prenom)." ".stripSlashes($nom)."<br/>");


//préparation de la requete pour récupération des login existants dans la base de données
	$request_login=sprintf("SELECT login FROM hi_participant", mysqli_real_escape_string($connexion,$login));


//execution de la requete
	$result_login=mysqli_query($connexion,$request_login);

	$ligne=mysqli_fetch_assoc($result_login);
	$logini=$ligne['login'];
	echo $logini;





	?>

		<div id="blocboutons">

<form name="connexion" method="post" action="inscription.php">
		<fieldset>
			<legend>Rentrez vos login et mot de passe</legend>

        <p>Veuillez remplir ce formulaire pour vous inscrire:</p>

		<label for="login">login</label><input type="text" name="login" value="" /><br />

		<label for="nom">Nom d'utilisateur</label><input type="text" name="nom" value="" /><br />

		<label for="username">Prenom d'utilisateur</label><input type="text" name="username" value="" /><br />

		<label for="pseudo">Pseudo</label><input type="text" name="pseudo" value="" /><br />

		<label for="password">Mot de passe<span class="small">(6 caract&egrave;res min.)</span></label><input type="password" name="password" /><br />

		<!--<label for="email">Email</label><input type="text" name="email" value="<?php if(isset($_POST['email'])){echo htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8');} ?>" /><br />

		<input type="file" name="imguser" id="fileToUpload"> -->
 	<input type="submit" value"Se connecter" />
	<input type="reset" value"Annuler" />


		</fieldset>
</form>

		</div>
</div>

</body>
</html>
