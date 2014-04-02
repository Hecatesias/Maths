<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Interpolation - Valeur de n</title>
	<link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
</head>

<body>
	<div>
		<form method="POST" action="inter2.php" class="form-horizontal">
			<fieldset>
				<!-- Form Name -->
				<legend>Choisissez la valeur de n :</legend>
				<!-- Select Basic -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="selectbasic">n = </label>
					<div class="col-md-2">
						<select id="selectbasic" name="n" class="form-control">
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
					</div>
				</div>
				<!-- Button -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="singlebutton"></label>
					<div class="col-md-4">
						<button id="singlebutton" name="singlebutton" class="btn btn-inverse">Suivant</button>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</body>
</html>