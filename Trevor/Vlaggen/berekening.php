<?php
if(isset($_POST['submit'])){
	
	
	
	$berekening = $_POST['berekening'];	

	switch($_POST($berekening)){

	case korea:
			if(Korea==$firstN[7]){
				echo "right answer";
			}
		break;
	default:
		echo "helemeel verkeerd!";
		break;
	
	
	}
}
?>