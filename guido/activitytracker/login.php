<?php
//TODO BETTER PASSWORD HASHING -md5 not safe, real_escape_string does not allow certain chars
//TODO Make use of filter_input.
//TODO Figure out connection issue when not using mysqli_real_escape_string
	require('connect.php');
	include('error.class.php');
	session_start();
    // If the values are posted, insert them into the database.
		if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myUsername = mysqli_real_escape_string($connection,$_POST['username']);
			$passwordHash = md5($_POST['password']);
      $myPassword = mysqli_real_escape_string($connection,$passwordHash);

//selects the ID from the login table where the username is equal to the username posted
//and the password that is posted in the username/password fields
			$sql = "SELECT id FROM login WHERE username = '$myUsername' and password = '$myPassword'";
//performs a query on the database(activity, the query to perform)
			$result = mysqli_query($connection,$sql);
//fetch array from $result, in associative array
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  //    $active = $row['active'];
//count the rows in $result
      $count = mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
//if table row is 1, register the session "myusername"
    //     session_register("myusername");
         $_SESSION['login_user'] = $myUsername;
         header("location: welcome.php");
      }else {
         $objError->message = "Your username/password is invalid";
      }
   }
    ?>
<html>

   <head>
      <title>Login</title>
      <link rel="stylesheet" href="stylesheet.css">
   </head>
<body>

           <div class="top" align ="center">
           <div class="topdiv">
           <div class="whitediv">
           <div class="div1"><b>Login</b></div>
           <div class="div2">
               <form action= "" method ="post">
                  <label>Username:</label><br>
                  <input type= "text" name= "username" class= "box"><br><br>
                  <label>Password:</label><br>
                  <input type= "password" name= "password" class="box" autocomplete="off"><br><br>
                  <input type= "submit" value ="Submit"/><br>
									<?php
//if variable error is set, echo error variable inside in div
									if($objError->isError())
									{
										?>
										<div class="alert" role="alert">
											<?php
											echo $objError->message;
											?>
										</div>
										<?php
									}
									?>
               </form>

            </div>
         </div>
      </div>
</div>
	<img src="http://127.0.0.1/itvitae/opdrachten/activiteitentracker/images/itvitae.png" alt="">
   </body>
</html>
