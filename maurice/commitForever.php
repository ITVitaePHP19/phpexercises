<meta http-equiv="refresh" content="1; url=commitforever.php" />

<?php			
	$file = 'forever.txt';
	
	$current = file_get_contents($file);
	
	$current .= "Commmit of the forever, ";
	
	file_put_contents($file, $current);
	
	echo $current;
?>Commmit of the forever, Commmit of the forever, Commmit of the forever, Commmit of the forever, Commmit of the forever, Commmit of the forever 2, 