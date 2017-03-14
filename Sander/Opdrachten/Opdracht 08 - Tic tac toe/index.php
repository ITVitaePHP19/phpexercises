<!doctype html>

<?php
session_start();
?>
	
<html>

<head>
	<title>Tic tac toe</title>
	<meta />
	<link href="stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<?php
		include "program.php";
	?>

	<form method="post">
		<div class="content">
			<div class="header">Tic tac toe</div>
		</div>
		<div class="content">
			<div class="subheader"><?php echo $title; ?></div>
		</div>
		<div class="content">
			<input type="submit" name="but0" value="<?php echo $but0; ?>" class="button active topleft" <?= $but0dis ?> />
			<input type="submit" name="but1" value="<?php echo $but1; ?>" class="button active" <?= $but1dis ?> />
			<input type="submit" name="but2" value="<?php echo $but2; ?>" class="button active topright" <?php echo $but2dis ?> />
		</div>
		<div class="content">
			<input type="submit" name="but3" value="<?php echo $but3; ?>" class="button active" <?= $but3dis ?> />
			<input type="submit" name="but4" value="<?php echo $but4; ?>" class="button active" <?= $but4dis ?> />
			<input type="submit" name="but5" value="<?php echo $but5; ?>" class="button active" <?= $but5dis ?> />
		</div>
		<div class="content">
			<input type="submit" name="but6" value="<?php echo $but6; ?>" class="button active bottomleft" <?= $but6dis ?> />
			<input type="submit" name="but7" value="<?php echo $but7; ?>" class="button active" <?= $but7dis ?> />
			<input type="submit" name="but8" value="<?php echo $but8; ?>" class="button active bottomright" <?= $but8dis ?> />
		</div>
		<div class="content">
			<input type="submit" name="reset" value="Reset" class="reset" />
		</div>
	</form>

</body>

</html>