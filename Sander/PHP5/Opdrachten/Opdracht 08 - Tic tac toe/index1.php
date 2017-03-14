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
			<button type="button" name="button0" value="0" class="button active topleft">
				<?php echo $B0; ?>
			</button>
			<button type="button" name="button1" value="1" class="button active">
				<?php echo $B1; ?>
			</button>
			<button type="button" name="button2" value="2" class="button active topright">
				<?php echo $B2; ?>
			</button>
		</div>
		<div class="content">
			<button type="button" name="button3" value="3" class="button active">
				<?php echo $B3; ?>
			</button>
			<button type="button" name="button4" value="4" class="button active">
				<?php echo $B4; ?>
			</button>
			<button type="button" name="button5" value="5" class="button active">
				<?php echo $B5; ?>
			</button>
		</div>
		<div class="content">
			<button type="button" name="button6" value="6" class="button active bottomleft">
				<?php echo $B6; ?>
			</button>
			<button type="button" name="button7" value="7" class="button active">
				<?php echo $B7; ?>
			</button>
			<button type="button" name="button8" value="8" class="button active bottomright">
				<?php echo $B8; ?>
			</button>
		</div>
		<div class="content">
			<input type="submit" name="reset" value="Reset" class="reset" />
		</div>
	</form>
</body>

</html>