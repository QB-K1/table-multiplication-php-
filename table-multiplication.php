<!DOCTYPE html>
<html lang="fr">

	<head>
	    <meta charset="utf-8">
	    <title>Table de Multiplications</title>
	    <!-- Ici l'appel du fichier CSS reset.css-->
		<link type="text/css" rel="stylesheet" href="css/reset.css"/>
		<!-- Ici l'appel du fichier CSS normalize.css-->
		<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
		<!-- Ici l'appel du fichier CSS style.css-->
		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
	</head>

	<body>

	    <h1>Table de Multiplications</h1>

	    <?php
		//construire une table de multiplication jusqu'à 9
		$size = 10;

		echo "<table>";

		for ( $row=1; $row <= $size; $row++) {

			echo '<tr>';

			for ($column=1; $column<=$size; $column++) {

				if($row == $column){

					echo "<td>".$row*$column."</td>";

				} else {

					echo "<td>".$row*$column."</td>";
				}
			}

			echo '</tr>';
		}
		echo "</table>";

		?>

	</body>

</html>