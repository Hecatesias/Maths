<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Interpolation - Valeur de x</title>
	<link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
</head>

<body>
	<div>
		<form method="POST" action="inter3.php" class="form-horizontal">
			<fieldset>
				<!-- Form Name -->
				<legend>Choisissez les valeurs de x :</legend>
					<!-- Text input-->
					<?php 
					$n = $_POST['n'];
					for ($i = 0; $i <= $n; $i++)
					{
						echo "<div class='form-group'>";
						echo "<label class='col-md-4 control-label' for='textinput'>x$i = </label>";
						echo "<div class='col-md-'>";
						echo "<input id='textinput' name='x$i' type='text' placeholder='' size =class='form-control input-md' required=''>";
						echo "</div>";
						echo "</div>";
					}
					echo "<input type='hidden' name='n' value='$n'>";
					?>
					<!-- Button -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="singlebutton"></label>
						<div class="col-md-4">
							<button id="singlebutton" name="singlebutton" class="btn btn-inverse">Résultat</button>
						</div>
					</div>
			</fieldset>
		</form>
	</div>
</body>
</html>