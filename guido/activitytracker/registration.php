<?php
//TO DO: Assign roles, add aditional field for role teacher/student
//			or set up a 2nd welcome page depending on the email address used
	require('connect.php');
	include('error.class.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password'])){
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $username = $_POST['username'];
	      $email = $_POST['email'];
        $password = $_POST['password'];
				$passwordHash = md5($password);
				echo $passwordHash;
        $query = "INSERT INTO `login` (Firstname, Lastname, username, password, email) VALUES ('$firstName','$lastName','$username', '$passwordHash', '$email')";
        $result = mysqli_query($connection, $query);
        if($result){
            $success = "User Created Successfully.";
        }else{
            $objError->message = "User Registration Failed.";
        }
    }
    ?>
<html>

   <head>
      <title>Registration</title>
      <link rel="stylesheet" href="stylesheet.css">
   </head>
<body>
           <div class="top" align ="center">
           <div class="topdiv">
           <div class="whitediv">
           <div class="div1"><b>Registration</b></div>
           <div class="div2">
               <form action= "" method ="post">
                  <label>First name:</label><br>
                  <input type= "text" name= "firstname" class= "box"><br><br>
                  <label>last Name:</label><br>
                  <input type= "text" name= "lastname" class= "box"><br><br>
                  <label>Email:</label><br>
                  <input type= "text" name= "email" class= "box"><br><br>
                  <label>Username:</label><br>
                  <input type= "text" name= "username" class= "box"><br><br>
                  <label>Password:</label><br>
                  <input type= "password" name= "password" class="box" autocomplete="off"><br><br>
                  <input type= "submit" value ="Submit"/><br>
                  <?php
                  if(isset($success))
                  {
                  ?>
                  <div class="alert alert-success" role="alert">
                    <?php
                    echo $success;
                    ?>
                  </div>
                  <?php
                }
                ?>
                  <?php
                  if($objError->isError())
                  {
                    ?>
                    <div class="alert alert-danger" role="alert">
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
