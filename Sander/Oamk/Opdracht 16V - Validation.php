<html>
<body>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

Name: <input type="text" name="name">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
E-mail:
<input type="text" name="email">
<span class="error">* <?php echo $emailErr;?></span>
<br><br>
Website:
<input type="text" name="website">
<span class="error"><?php echo $websiteErr;?></span>
<br><br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea>
<br><br>
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<span class="error">* <?php echo $genderErr;?></span>
<br><br>
<input type="submit" name="submit" value="Submit"> 

</form>

<!--
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<table>
		<tr>
			<td>Name: </td>
			<td><input type="text" name="name" /></td>
		</tr>
		<tr>
			<td>E-mail: </td>
			<td><input type="text" name="email" /></td>
		</tr>
		<tr>
			<td>Website: </td>
			<td><input type="text" name="website" /></td>
		</tr>
		<tr>
			<td>Comment: </td>
			<td><textarea name="comment" rows="5" cols="40"></textarea></td>
		</tr>
		<tr>
			<td>Gender: </td>
			<td>
				<input type="radio" name="gender" value="female" />Female
				<input type="radio" name="gender" value="male" />Male
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="submit" value="Submit" />
				<input type="reset" name="reset" value="Reset" />
			</td>
		</tr>
	</table>
</form>
-->

</body>
</html>