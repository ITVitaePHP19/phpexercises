<!doctype html>
<html>
<head>
<title>romeinse rekenmachine</title>
</head>
<body>

<?php include 'berekening.php'; ?>

<form method="post";>
	<fieldset>
	<legend>Romeinse rekenmachine</legend>
	Voer Romeinse cijfers in:
	<br>
	<input type="text" name="inputA" pattern="[MCIVDXLOmcivdxlo]{1,3}" style="text-transform:uppercase" value="<?php echo $inputA; ?>" required>
		<select name="operator">
			<!-- php code is voor geselecteerd item in selectmenu geselecteeerd houden na submt -->
			<option <?php if ($operator == '+') {?> selected="true" <?php ;}  ?> value="+">+</option>
			<option <?php if ($operator == '-') {?> selected="true" <?php ;}  ?> value="-">-</option>
			<option <?php if ($operator == '*') {?> selected="true" <?php ;}  ?> value="*">x</option>
			<option <?php if ($operator == '/') {?> selected="true" <?php ;}  ?> value="/">/</option>
		</select>
	<input type="text" name="inputB" pattern="[MCIVDXLOmcivdxlo]{1,3}" style="text-transform:uppercase" value="<?php echo $inputB; ?>" required>

	<button type="submit" name="=" >=</button>
	<span>
	<?php echo transform_to_roman($answer); ?>
	</span>
	<br>
	<?php echo $errMessage; ?>
	<br>
	<br>
	O = 0<br>
	I = 1<br>
	V = 5<br>
	X = 10<br>
	L = 50<br>
	C = 100<br>
	D = 500<br>
	M = 1000<br>
	<br>
	</fieldset>
</form>

</body>
</html>
