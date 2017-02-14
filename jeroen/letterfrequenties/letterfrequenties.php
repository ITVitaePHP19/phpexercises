<!doctype html>
<html>
<head>
<title>Letterfrequentie</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$file = file_get_contents($_POST["file"]);
	$character = $_POST["character"];
}
?>
<form method="post">
<fieldset>
<legend>Bestand kiezen</legend>
<input type="file" name="file" value=<?php echo $file;?> required>
<br>
<br>
Kies een teken: <input type="text" name="character" value="<?php echo $character;?>" maxlength="1" required>
<br>
<br>
<button type="submit" name="submit">Verstuur</button>
</fieldset>
</form>
<br>
<?php
echo "Tekst: </br>" . $file . "<br><br>";

if (isset($_POST["submit"])){
	echo "Het teken '" . $character . "' komt " . substr_count($file, $character) . " keer voor in de tekst.";
}
?>

</body>
</html>