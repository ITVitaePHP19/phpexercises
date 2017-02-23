<!doctype html>
<html>
<head>
<title>Oefenen</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="style_oefenen.css">
<script src="script.js"></script>
</head>
<body>
<h1>Oefenen</h1>
<p> Beweeg over het vlak om de landnaam te zien. Klik erop als je hem goed hebt.
<div class="flex-container">
	<?php
	//gets data from json-file
	$content = file_get_contents("flags/countries.json");
	//places json-content in array 
	$json = json_decode($content, true);

	//creates for each country-code in the json file 
	foreach ($json as $total => $country){
		foreach($country as $key => $value){
			if ($key == 'code'){
					$image = "flags/$value.svg";
					echo '<div class="flex-item" onclick="correct(this)"><img src="'.$image.'" alt="vlag" width="160px" height="100px" />'.PHP_EOL;
			}		
			if($key == 'name'){
				echo PHP_EOL. $value.'</div>';
			}
		}
	}
	?>
</div>
<button type="button" value="refresh page" onclick="window.location.reload()">Reset</button>

<script>
function correct(item){
	item.style.backgroundColor = '#70ff72';
	item.style.color = 'black';
}
onclick="correct(this)"
</script>
</body>
</html>