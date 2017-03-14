<html>
<body>

<?php

// get form selection
$day = $_GET['day'];

// check value and select appropriate item

/*if ($day == 1) {
    $special = 'Chicken in oyster sauce';
    }

elseif ($day == 2) {
    $special = 'French onion soup';
    }

elseif ($day == 3) {
    $special = 'Pork chops with mashed potatoes and green salad';
    }

else {
    $special = 'Fish and chips';
}*/

switch ($day) {
	case 1:
		$special = 'Chicken in oyster sauce';
		break;
	case 2:
		$special = 'French onion soup';
		break;
	case 3:
		$special = 'Pork chops with mashed potatoes and green salad';
		break;
	default:
		$special = 'Fish and chips';
		break;
}

?>

<h2>Today's special is:</h2>
<?php echo $special; ?>

</body>
</html>