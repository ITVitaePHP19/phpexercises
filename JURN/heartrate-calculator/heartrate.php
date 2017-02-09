<!DOCTYPE html>  
<head>  
<title>heartrate-calculator</title>  
</head>  
<body>  
<h2>heartrate-calculator</h2>  
<?php   
$age=0;  
  
$age=$_POST['age'];  
  
$lowerlimit=(220-$age) * 0.65;  
$higherlimit=(220-$age) * 0.85; 
 
print("Heart-rate limit is from $lowerlimit to $higherlimit");  
?>  
</body>  
</html> 