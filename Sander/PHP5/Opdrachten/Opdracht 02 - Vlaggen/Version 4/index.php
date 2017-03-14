<!doctype html>

<?php
session_start();
?>

<head>
	<link href="stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<div class="container menu">
		<table class="content">
			<tr>
				<td class="header">Flags</td>
			</tr>
			<tr>
				<td class="subheader">Test your flag knowledge!</td>
			</tr>
			<tr>
				<td class="imgMenu"><img src="Utrecht.jpg" /></td>
			</tr>
			<tr>
				<td class="text">
					Can you guess what flags belong to which country? Use this script to practice your knowledge, or take a quiz to test how good you really are.<br /><br />Good luck!
				</td>
			</tr>
		</table>
	</div>
	<br />
	<div class="submit">
		<table>
			<tr>
				<td>
					<a href="flags.html"><div class="button back submit">Flags</div></a>
					<a href="quiz.php"><div class="button forward submit">Quiz</div></a>
				</td>
			</tr>
		</table>
	</div>

</body>