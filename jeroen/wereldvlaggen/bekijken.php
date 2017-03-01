<!doctype html>
<html>
<head>
<title>Bekijken</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Overzicht</h1>

<div class="flex-container">

<?php
//gets data from json-file, and put it in $content-variable
$content = file_get_contents("flags/countries.json");

//decode the $content, and put it in $json-variable
$json = json_decode($content, true);

//splits data of each country from $json 
foreach ($json as $total => $country){
	//splits each value from the key's (e.g. "code" or "name")
	foreach($country as $key => $value){
		//if the key is 'code', search inside flags-folder for the flag with the name of the corresponding value,
		//and echo that flag.
		if ($key == 'code'){
				$image = "flags/$value.svg";
				echo '<div class="flex-item"><img src="'.$image.'" alt="vlag" width="160px" height="100px" />'.PHP_EOL;
		}
		//if the key is 'name', echo the corresponding value.
		if($key == 'name'){
			echo PHP_EOL. $value.'</div>';
		}
	}
}

?>

</div>
</body>
</html>
