<DOCTYPE! html>

<html>
<?php
if (isset($_POST['convert'])) {
	convertDistance();
}
function convertDistance() {
		$input = $_POST['in'];
		$kilometers = round($input * 0.621371192, 1);
		$miles = round($input * 1.609344, 1);
			
		if ($_POST['distance'] == "kilometers") {
			echo "$input miles is $kilometers kilometer";
			}
		
		elseif ($_POST['distance'] == "miles") {
			echo "$input kilometer is $miles miles";
			}
}
?>
<p>
<a href="distance.html">back to the converter</a>
</p>
</html>