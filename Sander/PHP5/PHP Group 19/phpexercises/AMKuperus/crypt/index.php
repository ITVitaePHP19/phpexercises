<!DOCTYPE html>
<head>
  <title>CRYPTiT</title>
</head>
<body>
  <?php
    include 'crypt.inc.php';
  ?>
  <nav>
    <a href="?do=encrypt.php">Encrypt</a>
    <a href="?do=decrypt.php">Decrypt</a>
  </nav>
  <?php
    if(isset($_GET['do'])) {
      $get = $_GET['do'];
      switch ($get) {
        case "encrypt.php":
          include 'encrypt.php';
          break;
        case "decrypt.php":
          include 'decrypt.php';
          break;
        default:
          echo "Oops something went wrong...<br>";
          echo "<a href='index.php'>Click me to return home</a>";
          break;
      }
    }
  ?>
</body>
</html>
