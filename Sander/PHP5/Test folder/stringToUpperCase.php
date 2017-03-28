<html>

<head>
	<title>String to Upper Case</title>
</head>

<body>
	<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
		<textarea name="strIngInput" cols="50" rows="10" style="resize:none;" ></textarea>
		<br />
		<input type="submit" value="Submit" />
	</form>

<br />

<?php

if (empty($_POST['strIngInput'])) {
	$strIngInput = '';
}
else {
	$strIngInput = $_POST['strIngInput'];
}

$strIngUpper = ucwords($strIngInput);

$arrIngSplit = explode(' ', $strIngUpper);

print_r($strIngUpper);

echo '<br><br>';

$strIngOutput = implode(', ', $arrIngSplit);

print_r($strIngOutput);

?>

</body>

</html>