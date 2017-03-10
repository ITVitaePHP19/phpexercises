<meta http-equiv="refresh" content="1; url=commitforever.php" />

<?php			
	$file = 'forever.txt';
	
	$current = file_get_contents($file);
	
	$current .= "Commmit of the forever, ";
	
	file_put_contents($file, $current);
	
	echo $current;
	
	// function writeFileContent($file, $content){
		// $fp = fopen($file, 'w');
		// fwrite($fp, $content);
		// fclose($fp);
		// chmod($file, 0777);//changed to add the zero
		// return true;
	// }
	
	// writeFileContent("forever.txt", "Commit of the forever, ");
?>