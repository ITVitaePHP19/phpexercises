<html>
<head>
	<title>Multiples of 3 and 5</title>
</head>
<body>
	Test
	<?php
	
		function multiples(){
			echo "Hello World!";
			
			$number = 0;
		
			for($i = 0; $i < 1000; $i++;){
				if($number %3 == 0){
				  $number += $i;
				}
				echo $i;
			}
			
			echo $number;
		}
		
		multiples();
	?>
</body>
</html>
