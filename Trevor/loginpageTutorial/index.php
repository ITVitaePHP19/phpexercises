<?php
	include 'header.php';
?>





<?php

	if(isset($_SESSION['id'])){
		echo $_SESSION['id'] . " is currently logged in";
	}else{
		echo "You are not logged in";
	}

?>




</form>

</body>
</html>