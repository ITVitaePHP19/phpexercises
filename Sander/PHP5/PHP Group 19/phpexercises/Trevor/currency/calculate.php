<h1> Currency calculator</h1>
<?php  
	
	if(isset($_POST["submit"])){
	
		
	
		echo "Your calculation is :" . "<br>";
	
		echo $_POST["number"] . " dollars is " . ($_POST["number"]   * 1.30 ) . " is euros " . "<br>";
		
		
		echo $_POST["number2"] . " HKGdollars is " . ($_POST["number"]   * 1.55 ) . " is euros " . "<br>";
		
		echo $_POST["number3"] . " Francs is " . ($_POST["number"]   * 1.66 ) . " is euros " . "<br>";
		
		echo $_POST["number4"] . " Marks is " . ($_POST["number"]   * 1.77 ) . " is euros " ."<br>" ;
		
		
		
		
}
?>
