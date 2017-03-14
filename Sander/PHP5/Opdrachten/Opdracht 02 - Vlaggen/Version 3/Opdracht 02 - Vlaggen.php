<?php
session_start();
?>

<!doctype html>

<html>

<head>
	<link href="Opdracht 02 - Vlaggen.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php
// Validate.php verifies answer and puts it in $_SESSION
include 'Opdracht 02 - Validate.php';

// Random.php finds random flag and answers
include 'Opdracht 02 - Random.php';

// Show either form or result
if ($_SESSION['count'] <= 10) {
	include 'Opdracht 02 - Form.html';
}
else {
	include 'Opdracht 02 - Result.html';
}
// Form.html
?>

</body>

</html>