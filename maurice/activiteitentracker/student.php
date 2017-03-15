<?php 
	if(!isset($_SESSION)) {
	   session_start();
	}
?>
<html>
<?php 
	class Student
	{
		
		function displayStudent()
		{
			$email = $_SESSION["email"];
			include_once "displayRecords.php";
			$e->export();
			$dR->displayRow($email);
			$dR->addRow();
		}
	}
	$s = new Student;
	$s->displayStudent();
?>
</html>