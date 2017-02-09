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
</body>  
</head>    
</html> 
