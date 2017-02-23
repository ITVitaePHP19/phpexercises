<!doctype html>
<html>
<head>
<title>Bekijken</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="script.js"></script>
</head>
<body>
<h1>Overzicht</h1>

<div class="flex-container">

<?php
//gets data from json-file
$content = file_get_contents("flags/countries.json");
$json = json_decode($content, true);

foreach ($json as $total => $country){
	foreach($country as $key => $value){
		if ($key == 'code'){
				$image = "flags/$value.svg";
				echo '<div class="flex-item"><img src="'.$image.'" alt="vlag" width="160px" height="100px" />'.PHP_EOL;
		}		
		if($key == 'name'){
			echo PHP_EOL. $value.'</div>';
		}
	}
}

?>

</div>
</body>
</html>