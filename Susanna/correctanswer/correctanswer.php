<DOCTYPE! HTML>

<html>
<head><title>Correct Answer</title>
<body>
<?php

correctAnswer($_POST ['animal']);

function correctAnswer($Animal) {
	if ($Animal === 'animal3'){
		echo 'Congratulations, you got the right answer!';
	}
	else {
		echo 'Congratulations, You failed!';
		
	}
	
}
	


?>



</body>
</html>