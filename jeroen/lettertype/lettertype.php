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
//fonts that can be selected
$fonts = array("Helvetica", "Arial", "Comic Sans", "Tahoma", "Corbel", "Palatino Linotype", "Book Antiqua","Times New Roman","Lucida Sans Unicode", "Lucida Grande");


if (isset($_POST["file"])){$input = file_get_contents($_POST["file"]);}else{$input="";}

//convert string to array
$array = str_split($input);

//if the array has more than 4000 characters, the rest of it will not show.
if (sizeof($array) > 4000){
	$array=array_slice($array,1,4000);
	echo "De tekst is te groot en wordt daarom niet volledig weergegeven.<br>";
}
//divide all characters. For each one, a random font is selected. 
foreach ($array as $character){
	//array rand voor kiezen van een willekeurig font; array_flip om de value terug te geven i.p.v. de key
	$randomFont = array_rand(array_flip($fonts));
	?> <font face="<?php echo $randomFont; ?>"> <?php echo $character;?></font><?php
}
?>

</body>
</html>
