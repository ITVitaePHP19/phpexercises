<?php
session_start();
?>

<!doctype html>

<html>

<head>
	<link href="stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php
// Validate.php verifies answer and puts it in $_SESSION
include 'validate.php';

// Random.php finds random flag and answers
include 'random.php';

// Show either quiz or result
if ($_SESSION['count'] <= 10) {
	include 'quiz.html';
}
else {
	include 'result.html';
}

?>

</body>

</html>