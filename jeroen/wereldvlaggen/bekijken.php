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
$images = glob("flags-name/*.svg");
for ($i=1; $i<count($images); $i++){
	$image = $images[$i];
		echo '<div class="flex-item"> <img src="'.$image .'" alt="vlag" width="160px" height="100px" />
	<br>' . test_input($image) . '</div>';
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	$data = str_replace(".svg", "", $data);
	$data = str_replace("flags-name/", "", $data);
	return $data;
}
?>
</div>
</body>
</html>