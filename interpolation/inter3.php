<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Interpolation - Résultats</title>
	<link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
</head>

<body>
	<center>
		<form method="POST" action="">
			<?php
			$nb = $_POST['n'] + 1;
			for ($i = 0; $i < $nb; $i++) //vérification si c'est bien des valeurs numériques
			{
				if (!is_numeric($_POST['x'.$i]))
				header("Location: index.php");
			}

			echo "n vaut : {$_POST['n']} <br />";
			echo "Valeur des x : <br /><br />";
			for ($i=0; $i <= $_POST['n'] ; $i++) 
			{ 
				echo "x$i = ".$_POST['x'.$i]."<br />";
			}
			// + + = -
			for ($i=0; $i <= $_POST['n'] ; $i++) 
			{ 
				$moins = "(X - ".$_POST['x'.$i].")";
				if (substr($_POST['x'.$i], 0, 1) == "-") 
					{
						$moins = "(X + ".str_replace("-", "", $_POST['x'.$i]).")";
					}
				echo $moins;
			}	
		?>
		</form>
	</center>
</body>
</html>