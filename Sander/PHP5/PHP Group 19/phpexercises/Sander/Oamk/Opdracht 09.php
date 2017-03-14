<html>
<body>

<?php

if (isset($_POST['height']) && isset($_POST['style'])) {

	$height = $_POST('height');
	$style = $_POST('style');

	switch ($style) {
		case 1:
			echo $height * 0.9;
			break;
		case 2:
			echo $height * 0.85;
			break;
		case 3:
			echo $height * 0.68;
			break;
		default:
			echo 'Select a style';
			break;
	}

}

else {
	echo 'Please fill in your height';
}

?>

</body>
</html>