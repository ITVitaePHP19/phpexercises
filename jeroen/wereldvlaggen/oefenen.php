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
	$images = glob("flags-name/*.svg");
	for ($i=1; $i<count($images); $i++){
		$image = $images[$i];
			echo '<div class="flex-item" onclick="correct(this)"><div class="flag"><img src="'.$image .'" alt="vlag" width="160px" height="100px" /></div>
		<br><div class="name">' . ChangeName($image) . '</div></div>';
	}
	function ChangeName($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		$data = str_replace(".svg", "", $data);
		$data = str_replace("flags-name/", "", $data);
		return $data;
	}
	?>
</div>
<button type="button" value="refresh page" onclick="window.location.reload()">Reset</button>

<script>
function correct(item){
	item.style.backgroundColor = '#70ff72';
	item.style.color = 'black';
}

</script>
</body>
</html>