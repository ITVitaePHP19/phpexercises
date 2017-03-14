<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
		<a href="Index.php">Home | </a>
		<a href="Info.php">Info | </a>
		<a href="Contact.php">Contact | </a>
		<a href="RandomArray.php">| RandomArray</a>



<?php
	
	
	//Array
	$names = array('Hello', 'world', '!');
	print_r($names);
	echo '<pre>', print_r($names), '</pre>';
	
	//Array2
	$person = array(
		'name' => 'Alex',
		'age'  => 24,
		'location' => 'London'
	);
	//print_r($person);
	echo '<pre>', print_r($person, true), '</pre>';
	
	//phpinfo = handige functienaam
	
	
	
	
	
	
?>



</body>
</html>