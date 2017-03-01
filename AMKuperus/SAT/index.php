<!DOCTYPE html>
<head>
  <title>StudentActivityTracker</title>
  <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
  <h1>Student Activity Tracker</h1>
  <!--switch to include login or studentpages or teacherpages-->
  <?php
    require_once 'jumper.inc.php';
    //include 'login.inc.php';
    include 'register.inc.php';
    $test = showAllRoles($db);
    print_r($test);
  ?>
</body>
</html>
