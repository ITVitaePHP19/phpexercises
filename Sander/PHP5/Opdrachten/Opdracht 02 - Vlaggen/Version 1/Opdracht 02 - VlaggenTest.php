<!doctype html>

<html>

<head>
	<link href="Opdracht 02 - Vlaggen.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php
	include 'Opdracht 02 - VlaggenValidate.php';
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
	<div class="container">
		<table class="content">
			<tr>
				<td class="header">What country does<br />this flag belong to?</td>
			</tr>
			<tr>
				<td><img src="images/<?php echo $flag ?>.jpg" /></td>
			</tr>
			<tr>
				<td class="answer"><input type="radio" name="answer" value="Afghanistan" /><label for="Afghanistan">Afghanistan</label></td>
			</tr>
			<tr>
				<td class="answer"><input type="radio" name="answer" value="Albania" /><label for="Albania">Albania</label></td>
			</tr>
			<tr>
				<td class="answer"><input type="radio" name="answer" value="Algeria" /><label for="Algeria">Algeria</label></td>
			</tr>
			<tr>
				<td class="answer"><input type="radio" name="answer" value="Andorra" /><label for="Andorra">Andorra</label></td>
			</tr>
		</table>
	</div>
	<br />
	<div class="submit">
		<table>
			<tr>
				<td>
					<input class="button" type="submit" name="submit" value="Validate answer" />
				</td>
			</tr>
		</table>
	</div>
</form>

<div class="correct" style="<?php echo $correct ?>">Correct!</div>
<div class="wrong" style="<?php echo $wrong ?>">Wrong! The correct answer should be: <?php echo $flag ?></div>

</body>

</html>