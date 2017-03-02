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