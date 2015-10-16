<?php
require_once("connexionbdd.php");


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// verifie si le fichier image est de type image ou pas
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }




  }


?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8_general_ci">
<link type="text/css" rel="stylesheet" href="css/style.css" />

</head>
<body>
<?php include("menu.php");?>
<div id="boutons_connexion">
	<h1>créer un projet</h1>
		<div id="blocboutons">

<form name="projet" method="post" action="creation_du_debat.php" enctype="multipart/form-data">
		<fieldset>
			<legend>Rentrez le titre de votre projet et décrivez le succinctement</legend>

	<p> Nom du projet :</p>
	<input type="text" name="nomprojet" value"" /><br />
	<p>Description :</p>
	<textarea name="descprojet"></textarea><br /></fieldset>

	<fieldset>

	 <legend> Selectionner votre carte à uploader:</legend>
    <input type="text" name="fileToUpload" />
    <input type="submit" value="Upload Image" name="submit"><br />

	<p>Choississez votre nombre de scenarios</p>
	<input type="number" name="nombre_scenario" value="" max="10" /><br />
	<input type="submit" value="validez" />
	</fieldset>
</form>

		</div>
</div>

</body>
</html>
