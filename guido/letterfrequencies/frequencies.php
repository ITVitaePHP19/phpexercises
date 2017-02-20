<!doctype html>
<html>
<head>
<title>Letter Frequencies</title>
</head>
<body>
<form method="post">
<fieldset>
<legend>Choose a file</legend>
<input type="file" name="file" value="file" required>
<br>
<br>
Choose a letter: <input type="text" name="char" value="" maxlength="1" required>
<br>
<br>
<button type="submit" name="submit">Check</button>
</fieldset>
</form>
<br>
<?php
if (isset($_POST['submit'])){
	$file = file_get_contents($_POST["file"]);
	$character = $_POST["char"];
}

echo  $file . "<br><br>";
if (isset($_POST["submit"])){
	echo "The letter". " ". $character ." ". "appears". " ". substr_count($file, $character). " ". "times in the file";
}
?>
</body>
</html>
