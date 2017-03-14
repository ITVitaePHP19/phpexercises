<!DOCTYPE html>
<head>
  <title>TimeTable</title>
  <style>
  td, th{
    border: 1px solid black;
  }
  table {
    border: 2px solid black;
    border-spacing: 0px;
  }
  tr:nth-child(odd) {
    background-color: lightgrey;
  }
  tr:nth-child(even) {
    background-color: #EFE9D2;
  }
  </style>
</head>
<body>
  <h1>TimeTable</h1>
  <?php
    include 'TimeTable.inc.php';
  ?>
</body>
</html>
