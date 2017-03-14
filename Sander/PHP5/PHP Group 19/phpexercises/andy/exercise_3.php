<head>
  <title>Heart rate limits calculator utility</title>
</head>
<body> <!--1.Create form in html for input. Use post to assign values to $hrupper and $hrlower via $age-->
  <form action="exercise_3.php" method="POST">
      <h1>Heart rate limits calculator utility</h1>

<?php
//2. Create function and get the value from the form. Use that value to create values for $hrupper and lower. Then post the result via an echo that calls upon the new values created by the sums in $hrupper and hrlower
  function heartRateCalculator() {
	   $age = $_POST['age'];
	    $hrupper = (220 - $age) * 0.85;
	     $hrlower = (220 - $age) * 0.65;
       echo "Your <strong>lower heart rate limit</strong> = $hrlower \n and your <strong>upper heart rate limit<stronger> = $hrupper";
}
  if (isset($_POST['submit']) && $_POST['submit'] == "calculate") {
  heartRateCalculator();
}

else {
?>

    <p>age</p><input type="number" name="age" min="1"><br>
<!--
-->
    <input type="submit" name="submit" value="calculate">
    <input type="reset" name="reset" value="reset">
  </form>
<?php
  }
?>
</body>
