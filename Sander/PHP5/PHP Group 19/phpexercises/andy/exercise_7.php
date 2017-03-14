<head> Distance converter
<body><!--1.Create a form, have it post the results back to the page when the submit button is clicked. Use the post method to give the vallues to the PHP portion of the program-->
      <form action="exercise_7.php" method="POST">
            <input type="number" name="in" autocomplete="off" autofocus><br> <br>
            <input type="radio" name="distance" value="kilometers"> Kilometers<br>
            <input type="radio" name="distance" value="miles"> Miles<br>
            <input type="submit" name="convert" value="convert">
            <input type="reset" name="reset" value="reset"><br>
      </form>
</body>

<?php
//2. check if the post is set. Then create a function to does the conversion math. Make if else statements that switches the math around when kilometers need to be converted to miles.
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
		  else if ($_POST['distance'] == "miles") {
			echo "$input kilometer is $miles miles";
		}
}
?>
