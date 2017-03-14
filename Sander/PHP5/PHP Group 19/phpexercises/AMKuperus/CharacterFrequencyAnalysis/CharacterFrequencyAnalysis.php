<!DOCTYPE html>
<head>
  <title>CharacterFrequencyAnalysis</title>
</head>
<body>
  <h1>CharacterFrequencyAnalysis</h1>
  <form action="CharacterFrequencyAnalysis.php" method="POST">
    <p>Type a character to find: <input type="text" size="1" maxlength="1" name="search"></p>
    <p>Select a .txt-document where to find all occurances off character: </p>
    <p><input type="file" name="file" accept="text/plain"></p>
    <input type="submit" value="submit">
  </form>
  <?php
    include 'CharacterFrequencyAnalysis.inc.php';
  ?>
</body>
</html>
