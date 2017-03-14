<!DOCTYPE html>
<html>
<head>
<title>Flags of Europe</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<h1 class="header">Flags of Europe</h1><br>
<table>
  <tr>
    <th>Flag</th>
    <th>Which flag is this?</th>
  </tr>
  <tr>
    <td><img src="http://127.0.0.1/itvitae/opdrachten/flags/images/sweden.gif" style="width:150px;height:100px;"/></td>
    <td>
      <form action="" method="POST">
      <input type="radio" name="flag1" value="sweden"> Sweden<br>
      <input type="radio" name="flag1" value="norway"> Norway<br>
      <input type="radio" name="flag1" value="netherlands"> Netherlands<br>
      <input type="radio" name="flag1" value="germany"> Germany<br><br>
      <input type="submit" name="submit1" value="Answer"><br>
      </form>
    </td>
  </tr>
  <tr>
    <td>
      <?php
      if(isset($_POST['submit1'])) {

      $answer = $_POST['flag1'];

          if ($answer == "sweden")
          {
            echo "<p>Yup</p>";
          }
          else {
            echo "Nope.	";
          }
        }
      ?>
    </td>
  </tr>
  <tr>
    <td><img src="http://127.0.0.1/itvitae/opdrachten/flags/images/netherlands.png" style="width:150px;height:100px;"/></td>
    <td>
      <form action="" method="POST">
      <input type="radio" name="flag2" value="sweden"> Sweden<br>
      <input type="radio" name="flag2" value="norway"> Norway<br>
      <input type="radio" name="flag2" value="netherlands"> Netherlands<br>
      <input type="radio" name="flag2" value="germany"> Germany<br><br>
      <input type="submit" name="submit2" value="Answer"><br>
      </form>
    </td>
  </tr>
  <tr>
    <td>
      <?php

      if(isset($_POST['submit2'])) {

      $answer = $_POST['flag2'];

          if ($answer == "netherlands")
          {
            echo "<p>Yup</p>";
          }
          else {
            echo "Nope.	";
          }
        }
      ?>
    </td>
  </tr>
  <td><img src="http://127.0.0.1/itvitae/opdrachten/flags/images/germany.jpg" style="width:150px;height:100px;"/></td>
  <td>
    <form action="" method="POST">
    <input type="radio" name="flag3" value="sweden"> Sweden<br>
    <input type="radio" name="flag3" value="norway"> Norway<br>
    <input type="radio" name="flag3" value="netherlands"> Netherlands<br>
    <input type="radio" name="flag3" value="germany"> Germany<br><br>
    <input type="submit" name="submit3" value="Answer"><br>
    </form>
  </td>
</tr>
<tr>
  <td>
    <?php
    if(isset($_POST['submit3'])) {

    $answer = $_POST['flag3'];

        if ($answer == "germany")
        {
          echo "<p>Yup</p>";
        }
        else {
          echo "Nope.	";
        }
      }
    ?>
  </td>
</tr>
<tr>
  <td><img src="http://127.0.0.1/itvitae/opdrachten/flags/images/norway.png" style="width:150px;height:100px;"/></td>
  <td>
    <form action="" method="POST">
    <input type="radio" name="flag4" value="sweden"> Sweden<br>
    <input type="radio" name="flag4" value="norway"> Norway<br>
    <input type="radio" name="flag4" value="netherlands"> Netherlands<br>
    <input type="radio" name="flag4" value="germany"> Germany<br><br>
    <input type="submit" name="submit4" value="Answer"><br>
    </form>
  </td>
</tr>
<tr>
  <td>
    <?php

    if(isset($_POST['submit4'])) {

    $answer = $_POST['flag4'];

        if ($answer == "norway")
        {
          echo "<p>Yup</p>";
        }
        else {
          echo "Nope.	";
        }
      }
    ?>
  </td>
</tr>
</table>

</body>
</html>
