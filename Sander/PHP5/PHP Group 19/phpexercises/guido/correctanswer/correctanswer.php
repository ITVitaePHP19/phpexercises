<!DOCTYPE html>
<html>
<head>
<title>Correct Answer</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<h1><p class="header">Guess the animal!</p></h1><br>
<table>
  <tr>
    <th>Image</th>
    <th>Answers</th>
  </tr>
  <tr>
    <td><img src="http://127.0.0.1/itvitae/opdrachten/correctanswer/images/reindeer.jpg" style="width:450px;height:300px;"/></td>
    <td>
      <form action="" method="POST">
      <input type="radio" name="answer1" value="dog"> Dog<br>
      <input type="radio" name="answer1" value="cat"> Cat<br>
      <input type="radio" name="answer1" value="reindeer"> Reindeer<br>
      <input type="radio" name="answer1" value="mouse"> Mouse<br><br>
      <input type="submit" name="submit" value="Answer"><br>
      </form>
    </td>
  </tr>
</table>

</body>
</html>
<?php

if(isset($_POST['submit'])) {

$answer = $_POST['answer1'];

		if ($answer == "reindeer")
		{
			echo "Yup, that is a reindeer. Caribou to be precise, but still a reindeer.";
		}
		elseif ($answer == "mouse") {
			echo "What?";
		}
		else {
			echo "Nope.	";
		}
	}
?>
