<doctype! html>
<html> 
<head> 
<title>BMI-calculator</title> 
</head> 
<body> 

<h2>BMI-calculator</h2> 

<?php
 
$height=0; 
$width=0; 
 
$height=$_POST['height']; 
$weight=$_POST['weight']; 
 
$bmi = $weight / ($height * $height); 

print("The body mass index is $bmi");
 
?> 
</body> 
</html>
