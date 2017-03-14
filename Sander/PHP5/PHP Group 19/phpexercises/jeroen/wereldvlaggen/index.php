<!doctype html>
<html>
<head>
<title>Vlaggen van de wereld</title>
</head>
<body>
<nav>

	<a href="index.php?page=bekijken">Bekijken</a>
	<a href="index.php?page=oefenen">Oefenen</a>
</nav>
<?php
$page="";
if(isset($_GET["page"])){
	$page = $_GET["page"];
}
if ($page == "bekijken"){
	include"bekijken.php";
}
elseif ($page == "oefenen"){
	include"oefenen.php";
}
else {
	include"bekijken.php";
}
?>
</body>
</html>