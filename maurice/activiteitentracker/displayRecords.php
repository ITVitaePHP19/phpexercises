
<form action='' method='post'><input type='submit' name='export' value='Export to PDF'></form>
<?php 
class Export
{
	function export()
	{		
		if(isset($_POST["export"]))
		{	
			header ("Location: exportpdf.php");
		}
	}
}
$e = new Export();
	
class DisplayRecords
{
	function displayRow($email)
	{
		// echo $_SESSION["email"];
		if(isset($_SESSION["email"]))
		{
			$email = $_SESSION["email"];
		}
		else
		{	
			header("location:index2.php?p=login");
			die;
		}
	
		echo	"<html><head><title>Activiteiten Tracker</title>
				<link rel='stylesheet' type='text/css' href='../css/style2.css'>
				</head><div id='actbody'><div id='actbanner'><img id='itvllogo' src='../img/itvl.png' height='60px' width='auto'>
				<div id='bannertext'>Activiteiten Tracker</div><div id='bannername'>" . $email . "</div></div>
				<table id='activiteitentracker'><tr id='ths'>
				<th>Studieonderdeel</th><th>Begindatum</th><th>Einddatum</th><th>Tijd Besteed</th>
				<th>% Voltooid</th><th>Moeilijkheid</th><th>Plezier</th><th>Notities</th><th>Edit / Delete</th></tr>";
		
		//connect
		$dbc = mysqli_connect("localhost", "root", "", "php19") or die("Error connecting to MYSQL server");		
				
		//get id
		$sqlGetID = "SELECT id FROM userregistration WHERE mail='$email'"; 
				
		//3. Execute the Query
		$result = mysqli_query($dbc, $sqlGetID) or die("<br><br>Error querying the database");
		
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()){
				
				$_SESSION["id"] = $row["id"];
				$id = $_SESSION["id"];
				
				// Insert the id as FK into the form table
				$sqlFormID = "INSERT IGNORE INTO form (id) VALUES ('$id')";
						
				//3. Execute the Query
				$resultForm = mysqli_query($dbc, $sqlFormID) or die("<br><br>Error querying the database 1"); 
			}
		} 
		else 
		{
			echo "0 results 1";
		}
		//get the form id
		$formid = "SELECT form_id FROM form WHERE id='$id'";
	
		$resultid = mysqli_query($dbc, $formid) or die("<br><br>Error querying the database");
		
		if ($resultid->num_rows > 0) {
			// output data of each row
			while($row = $resultid->fetch_assoc()){
				
				$id = $row["form_id"];
				// var_dump($id);
				$_SESSION["formid"] = $id;
			}
		} 
		else 
		{
			echo "0 results";
		}
		
		$fid = $_SESSION["formid"];
		
		$dbc = mysqli_connect("localhost", "root", "", "php19") or die("Error connecting to MYSQL server");				
			
		$sqlDisplay = "SELECT * FROM activity WHERE form_id='$fid'";

		$resultDisplay = mysqli_query($dbc, $sqlDisplay) or die("<br><br>Error querying the database");
		
		if ($resultDisplay->num_rows > 0) 
		{
		// output data of each row
			while($row = $resultDisplay->fetch_assoc()){
		//. $row["percentage_complete"] . 
				$d = 0;	
				$e = 100;	
				echo "
					<tr>
						<td class='odd'>" 	. 	$row["task"] 				. 	"</td>
						<td class='even'>" 	. 	$row["date_start"] 			. 	"</td>
						<td class='odd'>" 	. 	$row["date_end"] 			. 	"</td>
						<td class='even'>" 	. 	$row["hours"] 				. 	"</td>
						<td class='odd'><progress max='100' value='" . $row["percentage_complete"] . "'></progress></td>
						<td class='even'>" 	. 	$row["difficulty"] 			. 	"</td>
						<td class='odd'>" 	. 	$row["fun_factor"] 			. 	"</td>
						<td class='even'>" 	. 	$row["notes"] 				. 	"</td>
						<td class='odd'><form>
											<input class='taskbutton' type='submit' name='" . $d . "' value='Delete Task'>
											<input class='taskbutton' type='submit' name='" . $e . "' value='Edit Task'>	
										</form>
						</td>
					</tr>";
				$d++;
				$e++;
			}
		} 
		else 
		{
			echo "0 results";
		}
	
		//4. Close the connection
		mysqli_close($dbc);	
	}	
	
	function addRow()
	{
		echo 
			'<br><tr></tr><tr></tr><tr>
			<form action="" method="post">
				<td>
					<input type="text" name="task">
				</td>
				<td>
					<input type="date" name="startdate">
				</td>
				<td>
					<input type="date" name="enddate">
				</td>
				<td>
					<input type="number" name="hours" size="2">
				</td>
				<td>
					<input type="number" name="percentage" min="0" max="100" size="2">
				</td>
				<td>
					<input type="number" name="difficulty" min="0" max="10" size="2">
				</td>
				<td>
					<input type="number" name="funfactor" min="0" max="10" size="2">
				</td>
				<td>
					<input type="textarea" name="notes" rows="2">
				</td>
				<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><input type="submit" name="addRow" value="Activiteit toevoegen"></td></tr>
			</form></tr>';
	
		if(isset($_POST["addRow"]))
		{
			$task = $_POST["task"];
			$startdate = $_POST["startdate"];
			$enddate = $_POST["enddate"];
			$hours = $_POST["hours"];
			$percentage = $_POST["percentage"];
			$difficulty = $_POST["difficulty"];
			$funfactor = $_POST["funfactor"];
			$notes = $_POST["notes"];
			$id = $_SESSION["id"];
			// addRow();
			
			//1. Connect with mysqli_connect
			$dbc = mysqli_connect("localhost", "root", "", "php19") or die("Error connecting to MYSQL server");	
			
			$fid = $_SESSION["formid"];
			
			//2. insert the posted data into the database
			$sqlActivity = "INSERT INTO activity (form_id, task, date_start, date_end, hours, percentage_complete, difficulty, fun_factor,notes) VALUES ('$fid', '$task', '$startdate', '$enddate', '$hours', '$percentage', '$difficulty', '$funfactor', '$notes')";
			
			//3. Execute the Query
			$result = mysqli_query($dbc, $sqlActivity) or die("<br><br>Error querying the database");
			
			$id = $_SESSION["id"];
			// var_dump($id);
			
			//4. Close the connection
			mysqli_close($dbc);	
		}
	}
}	
$dR = new DisplayRecords;

// Extra functies: 
// • PDF / CSV export
?>
</table>
</div>