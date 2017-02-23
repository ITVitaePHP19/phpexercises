<?php



 
 $a = 0;
 $b = 1;
 $total = 0;
  
  
 
 
 for ($c=$a+$b;$c<4000000;$c=$a+$b){
	 //echo "The number is: $a <br>";
	 
	 if ($c % 2 == 0) {
		 $total += $c;
	 }
	 $a = $b;
	 $b = $c;
 }
 echo $total;
 

 
 
?>