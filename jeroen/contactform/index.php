<!doctype html>
<head>
<title>opdracht1</title>
<link href="style.css" rel="stylesheet" type="text/css">
<head>
<body>
<nav>
	<a href="index.php?page=home">Home</a>
	<a href="index.php?page=info">Info</a>
	<a href="index.php?page=contact">Contact</a>
</nav>
<?php 
$page = 1;
if(isset($_GET["page"])){
	$page = $_GET["page"];
}
if($page == "home"){ 
include"home.php"; 
} 
elseif($page == "contact"){ 
include"contact.php"; 
} 
elseif($page == "info"){ 
include"info.php"; 
} 
else{ 
include"home.php"; 
} 
?>
</body>
</html>
