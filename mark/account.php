<?php
require "connections/connection.php";
session_start();
$userID=$_SESSION['UserID'];
if ($_SESSION['UserID'])
{
//we maken een textbestnad voorzover niet aanwezig
// we openen het bestand en schrijven er wat in"is ingelogd"
// we sluiten het bestand als laatste
$loggedin=fopen("loggedin.txt","w");
$text=$userID.":is ingelogd"."<br/>";
fwrite($loggedin,$text);
fclose($loggedin);

//we plaatsen een cookie
//met een einde tijd, en we roepen d ecookie ook weer op 
$expire=time()+60*60*24*30;

setcookie("user","kak.com",$expire);
//$getal;
echo $_COOKIE['user'];


}
else{header ('Location: login.php');}

?>

</doctype html>
<html>
<head>
<link href="css/master.css" rel="stylesheet" type="text/css"/>
<link href="css/menu.css" rel="stylesheet" type="text/css"/>
<meta charset="utf-8">
<title> Untitled documnet </title>
</head>

<body>
<div class="Container">
	<div class="Header"></div>
	<div class="Menu">
		<nav>
			<ul>
				<li><a href= "logout.php ">logout</a> </li>
				
				<li><a href= "update.php" >update account</a> </li>
				
			</ul>
		</nav>
	
	</div>
	<div class="LeftBody"></div>
	<div class="RightBody">
	<p> this is your account 
	<?php 
	echo "hello ".$userID ;
	//SELECT column_name(s)FROM table1 LEFT OUTER JOIN table2
	//ON table1.column_name=table2.column_name;
	//we maken een left outer join ale rijen van linker tabel ic user en 
	//rijen van andere tabel die gekopeld zijn via de userid, dat zijn activities
	//$sql = "SELECT user.UserID, user.FirstName, user.LastName, user.Email, activities.ActID ,activities.ActOmschrijving FROM user,activities WHERE user.UserID=useractivities.UserID AND useractivities.ActID= Activities.ActID AND User.UserID=$userID ";
	$sql = "SELECT user.UserID, user.FirstName, user.LastName, user.Email, useractivities.ActivityID, activities.ActOmschrijving FROM user,useractivities,activities WHERE User.UserID=$userID AND user.UserID=useractivities.UserID AND useractivities.ActivityID= activities.ActID ";
	$result = $con->query($sql);
	
	?>
	<h1 align="center"> Employee Details </h1>
	<table border="1" align="center" style="line-height:25px">
	<tr>
	<th> User Id </th>
	<th> FirstName </th>
	<th> LastName </th>
	<th> Email </th>
	<th> Act ID </th>
	<th> Act Omschrijving </th>
	</tr>
	<?php
	//fetch data from database
	if ($result->num_rows > 0) 
	{
    // output data of each row
    while($row = $result->fetch_assoc())
	{		
	?>
	<tr>
	<td><?php echo $row["UserID"]; ?></td>
	<td><?php echo $row["FirstName"]; ?></td>
	<td><?php echo $row["LastName"]; ?></td>
	<td><?php echo $row["Email"]; ?></td>
	<td><?php echo $row["ActivityID"]; ?></td>
	<td><?php echo $row["ActOmschrijving"]; ?></td>
    </tr>
	<?php
	//echo "id: " . $row["UserID"]. " - voornaam: " . $row["FirstName"].  " - achternaam: " . $row["LastName"]." " ."email:". $row["Email"]." "."actOmschrijving: ". $row["ActOmschrijving"]."<br>";
	}
	}
	else 
	{
    //echo "0 results";
	?>
	<tr>
	<th colspan="2"> There's no data found !</th>
	</tr>
	<?php
	}
	$con->close();
	?>
	</table>
	
	
	 
	
	</p>
	
	</div>
	<div class="Footer"></div
</div>
</body>
</html>