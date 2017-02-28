<?php
//include session.php to store session
   include('session.php');
?>
<html>

   <head>
      <title>Welcome</title>
      <link rel="stylesheet" href="stylesheet.css">
   </head>

   <body>
     <div class="welcome">
      <h1>Welcome <?php echo $login_session; ?></h1>
      <h2><a href="logout.php">Sign Out</a></h2>
     </div>
   </body>

</html>
