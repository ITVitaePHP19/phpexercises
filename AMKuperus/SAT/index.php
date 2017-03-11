<!DOCTYPE html>
<?php
  session_start();
  include 'head.inc.php';
?>
<body>
  <h1>Student Activity Tracker</h1>
  <!--switch to include login or studentpages or teacherpages detected from sessionvariable-->
  <?php
    require_once 'jumper.inc.php';
    include 'login.inc.php';
    $test = showAllRoles($db);
    print_r($test);
  ?>
</body>
</html>
