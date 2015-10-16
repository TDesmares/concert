<h2>Tous les projets</h2>

<div id="ajoutprojet">

		<?php
		//préparation de la requête
			$transaction="SELECT titreprojet FROM hi_debat";

		//execution requête SQL
			$resultat=mysqli_query($connexion, $transaction);

		//gestion de l'erreur
			if(!$resultat){
				die("Probleme SQL: ".mysqli_error($connexion));

			}
		//boucle d'écriture du jeux d'enregistrement
		if(mysqli_num_rows($resultat) !=0){
			while($ligne=mysqli_fetch_assoc($resultat)){
					echo "<div style='background-color:#ccc; margin:1em;'>".$ligne['titreprojet']."</div>";

				}

			}
			//liberation ressource memoire

			mysqli_free_result($resultat);

		 ?>
	<img src="icones/png/round62-1.png" alt="" onclick=""><br />
	<a href="creerprojet.php">
		<p>Ajouter un projet</p>
	</a>
</div>
