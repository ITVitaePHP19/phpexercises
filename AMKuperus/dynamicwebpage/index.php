<!DOCTYPE html>
<html>
<?php
  include 'head.php';
?>
  <body>
    <h1>This is A website!</h1>
    <nav>
      <a href='?p=home.php'>Home</a>
      <a href='?p=form.php'>Contact</a>
      <a href='?p=about.php'>About</a>
    </nav>
    <div class="content">
    <?php
      //Include the .php file that was requested.
      if (isset($_GET['p'])) {
        $get = $_GET['p'];
        switch ($get) {
            case "home.php":
              include 'home.php';
              break;
            case "form.php":
              include 'form.php';
              break;
            case "about.php":
              include 'about.php';
              break;
            default:
              include '404.php';
        }
      } else {
        include 'home.php';
      }
    ?>
  </div>
  </body>
<?php
  include 'foot.php';
?>
</html>
