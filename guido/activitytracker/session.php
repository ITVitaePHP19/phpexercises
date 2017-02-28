<?php
   include('connect.php');
   session_start();
//set variable to check the logged in user
   $userCheck = $_SESSION['login_user'];
//SQL query from db set in $connection (connect.php) to check whether variable userCheck equals the username
   $sql_session = mysqli_query($connection,"select username from login where username = '$userCheck' ");

   $row = mysqli_fetch_array($sql_session,MYSQLI_ASSOC);
//save username from  sql_session variable in new variable called $login_session
   $login_session = $row['username'];

   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>
