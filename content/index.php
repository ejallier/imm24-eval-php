<!DOCTYPE html>

<html>
<head>

	<meta charset="UTF-8">

	<title>Gaston v/s Spirou</title>

	<link rel="stylesheet" media="screen" href="../style/komika/stylesheet.css">
	<link rel="stylesheet" media="screen" href="../style/style.css">

</head>
<body>
<?php 
	/*
		Commencez par créer 2 variables tableau
		dans $dialog1, vous stockerez les répliques de Spirou
		dans $dialog2, vous stockerez les répliques de Gaston
	*/


	/*
		créez une variable $perso1 conçue comme ci:
			clef : "image"  _  valeur :  "spirou.jpg"
			clef : "dialog" _  valeur :  $dialog1
	*/


	/*
		créez une variable $perso2 conçue comme ci:
			clef : "image"  _  valeur :  "gaston.jpg"
			clef : "dialog" _  valeur :  $dialog2
	*/


?>


	<div id="dialogue">
		<?php 
		
		//	Si vous avez bien suivi les consignes, le code suivant devrait fonctionner :

			for($i=0; $i<=6; $i++){
				echo '<p class="perso1">' . $perso1["dialog"][$i] . '</p>';
				echo '<p class="perso2">' . $perso2["dialog"][$i] . '</p>';
			}
		?>
		<div id="persos">
			<img src="../img/<?php  echo $perso1["image"]; ?>" />
			<img src="../img/<?php  echo $perso2["image"]; ?>" />
		</div>

	</div>

</body>
</html>