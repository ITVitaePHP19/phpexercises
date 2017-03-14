<html>
<body>

<?php

if (isset($_POST['submit'])) {
	
	$height = $_POST['height'];
	$weight = $_POST['weight'];

	if (filter_var($height, FILTER_VALIDATE_FLOAT) === false || filter_var($weight, FILTER_VALIDATE_INT) === false) {
		echo "You have specified the wrong height or weight. Use this format: '89' for weight and '1.75' for height.";
	}

	elseif (strlen($height) > 4 || strlen($weight) > 3) {
		echo "You can only use 3 numbers for weight and 4 numbers for height.";
	}

	else {
		$result = $weight / ($height ** 2);
		echo $result;
	}

}

else {
	echo "Please fill in the form.";
}

?>

</body>
</html>