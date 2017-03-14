<?php

include("dbconnect.php");

$naam=$_POST['naam'];
$achternaam=$_POST['achternaam'];
$bsn=$_POST['bsn'];
$geboortedatum=$_POST['geboortedatum'];
$omschrijving=$_POST['omschrijving'];

if($naam != null && $achternaam != null && $bsn != null && $geboortedatum != null && $omschrijving != null ){


$query=mysqli_query($db_connect, "INSERT INTO users (naam,achternaam,bsn,geboortedatum,omschrijving) VALUES ('$naam','$achternaam','$bsn','$geboortedatum','$omschrijving')");
}

mysqli_close($db_connect);

header("location:index.php?note-succes");
    