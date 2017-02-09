<!DOCTYPE html> 
<html>  
<head>
<body>
<?php   
$amount = 0;  
$result = 0; 
  
$amount = $_POST['Dollars'];  
$result = $amount * 0.93;  
print("$amount dollars is $result euros");  
?> 
<br/>
<a href="http://localhost/ITVITAE/Currency_Calculator/currency.html">back to the calculator!</a>
</body>  
</head>    
</html> 