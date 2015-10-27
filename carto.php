<div id="dialoguea">
	<?php
		//préparation de la requête SQL
		$transaction="SELECT titreprojet, descgen FROM hi_debat";

		//execution requête SQl
		$resultat=mysqli_query($connexion,$transaction);

		//gestion de l'erreur
		if(!$resultat){
			die("Problème SQL : ".mysqli_error($connexion));
		}

		//lecture des enregistrements
		if(mysqli_num_rows($resultat)!=0){
			while($projet=mysqli_fetch_assoc($resultat)){
				echo "<div class=''>
					<div class=''>

					</div>
					<div class=''>
					""
					</div>
					<div class=''>

					</div>
					</div>\n";

			}


		}

		?>
</div>
<div id="infographie">
	<img src=""> </img>
</div>


<div id="outils">


</div>
