<!doctype html>
<html>
<head>
<title>Lettertype</title>
</head>
<body>

<form method="post">
	<fieldset>
	<legend>Bestand kiezen</legend>
		<input type="file" name="file" value="<?php echo $file;?>" required>
		<br>
		<br>
		<button type="submit" name="submit">Verstuur</button>
	</fieldset>
</form>
<br>

<?php
//fonts waaruit gekozen kan worden
$fonts = array("Helvetica", "Arial", "Comic Sans", "Tahoma", "Corbel", "Palatino Linotype", "Book Antiqua","Times New Roman","Lucida Sans Unicode", "Lucida Grande");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){
	//zet tekst uit bestand om in een string
	$input = file_get_contents($_POST["file"]);
}

//zet string om in array
$array = str_split($input);

//als de array meer dan 4000 tekens bevat, wordt deze daar afgehakt.
if (sizeof($array) > 4000){
	$array=array_slice($array,1,4000);
	echo "De tekst is te groot en wordt daarom niet volledig weergegeven.<br>";
}


//koppelt alle tekens los, zodat deze individueel een font toegewezen kunnen krijgen 
foreach ($array as $character){
	//array rand voor kiezen van een willekeurig font; array_flip om de value terug te geven i.p.v. de key
	$randomFont = array_rand(array_flip($fonts));
	?> <font face="<?php echo $randomFont; ?>"> <?php echo $character;?></font><?php
}
?>

</body>
</html>