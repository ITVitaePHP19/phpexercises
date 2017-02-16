<html>
<head>
	<title>Aliens abducted Me - Report an Abduction</title>
</head>
<body>
	<h2>Aliens Abducted Me - Report an Abduction</h2>
	<?php 
		
		//Get the sumbitted form data
		// $first_name = $_POST["firstname"];
		// $last_name = $_POST["lastname"];
		// $when_it_happened = $_POST["whenithappened"];
		// $how_long = $_POST["howlong"];
		// $how_many = $_POST["howmany"];
		// $alien_description = $_POST["aliendescription"];
		// $what_they_did = $_POST["whattheydid"];
		// $fang_spotted = $_POST["fangspotted"];
		// $email = $_POST["email"];
		// $other = $_POST["other"];
		
		//Email setup
		// $to = "mjwaney@hotmail.com";
		// $subject = "Aliens Abducted Me = Abduction Report";
		// $msg = "$name was abducted  $when_it_happened and was gone for $how_long.\n" .
		// "Number of aliens: $howmany\n" .
		// "Alien description: $alien_description\n" .
		// "What they did: $what_they_did\n" .
		// "Fang spotted: $fang_spotted\n" .
		// "Other comments: $other\n";
		
		//Mail function
		// mail($to, $subject, $msg, "From:" . $email);
		
		//Confirmation message
		// echo "Thanks for submitting the form, " . $first_name . " " . $last_name . "<br>";
		// echo "You were abducted " . $when_it_happened;
		// echo " and were gone for " . $how_long . "<br>";
		// echo "Number of aliens: " . $how_many . "<br>";
		// echo "Describe them: " . $alien_description . "<br>";
		// echo "The aliens did this: " . $what_they_did . "<br>";
		// echo "Was Fang there? " . $fang_spotted . "<br>";
		// echo "Other comments: " . $other . "<br>";
		// echo "Your email address is: " . $email;
		
		//1. Connect with mysqli_connect
		$dbc = mysqli_connect("localhost", "root", "", "aliendatabase")
			or die("Error connecting to MYSQL server");		
		
		//2. Assemble Query String
		$query = "INSERT INTO aliens_abduction (first_name, last_name, " .
		"when_it_happened, how_long, how_many, alien_description, " .
		"what_they_did, fang_spotted, other, email) " .
		"VALUES ('$first_name', '$last_name', '$when_it_happened', '$how_long', '$how_many', " .
		"'$alien_description', '$what_they_did', '$fang_spotted', '$other', '$email')";
		
		//3. Execute the Query
		$result = mysqli_query($dbc, $query)
			or die("<br><br>Error querying the database");
		
		//4. Close the connection
		mysqli_close($dbc);
		
		//multiples
		function multiples(){
			echo "Hello World!";
			
			$number = 0;
		
			for($i = 0; $i < 1000; $i++){
				if($i %3 == 0 || $i %5 == 0){
				  $number = $number + $i;
				}
			}
			
			echo "<br>" . "Multiples under 1000 = " . $number;
		}
		
		multiples();
		
		
		
		//fibonacci
		function fibonacci($n, $first = 0,$second = 1){
			$fib = [$first,$second];
			
			$number2 = 0;
			
			for($i = 1; $i < $n; $i++){
				$fib[] = $fib[$i] + $fib[$i - 1];
				
				if($fib[$i] %2 == 0){
					$number2 = $number2 + $i;
					echo "<br>" . $number2 . "<br>";
				}				
			}
			echo "<br>";
			return $fib;
		}
		echo "<pre>";
		print_r(fibonacci(33));
		
	?>
</body>
</html>

?><tr><td><?php echo $name; ?></td>
							<td><?php echo "<img src='" . $flag . "'>"; ?></td></tr>
							
							<?php