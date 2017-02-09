<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="theme.css">
</head>
		
<body>
	<button id = "knop"type="button">  <a href="Index.php?pagina=Home">Home   </a></button>
		
	<button id = "knop" type="button">  <a href="index.php?pagina=Info">Info  </a></button>
	<button id = "knop" type="button">	<a href="index.php?pagina=Contact">Contact  </a></button>
	<button id = "knop" type="button">	<a href="index.php?pagina=RandomArray"> RandomArray</a></button>
	<button id = "knop" type="button">	<a href="index.php?pagina=Form2"> Form2</a></button>


<?php 
	
	if(isset($_GET["pagina"])) {
	
		if ($_GET["pagina"] == "Home" ) {
			echo "Welkom op de homepagina";
			
		}elseif ($_GET["pagina"] == "Info" ) {
			echo "Welkom op de infopagina";
		}
		elseif($_GET["pagina"] == "Contact" ) {
			echo "Welkom op de Contactpagina";	
		include 'Contact.php';
		}
		elseif($_GET["pagina"] == "Form2"){
			echo "Welkom op form2";
		}
		else{echo "Verkeerd";}
	}
	else{echo "Verkeerd";}
	
?>





</body>
</html>