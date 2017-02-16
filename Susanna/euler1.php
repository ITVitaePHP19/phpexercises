<?php

//echo 'this assignment is not ready yet';

 
 $a = 0;
 $b = 0;
 
  
  /*
  if ($a % 3 == 0 or $a % 5 == 0){
	$b + $a = $b;
	}
	elseif ($a <= 10){
		++$i;
	}
	elseif ( $a >= 11){
		echo 'the total is: $b';
	}
  */
 
 //given example
 
 
 for ($a = 0; $a < 1000; $a++){
	 //echo "The number is: $a <br>";
	 
	 if ($a % 3 == 0) {
		 $b = $a + $b;
	 }
	 elseif ($a % 5 == 0) {
		 $b = $a + $b;
	 }
 }
 echo $b;
 
 /*
 switch ($a++) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
 */
 
 
?>