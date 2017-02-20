<?php
  //If there is something in POST.
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $search = $_POST['search'];
    $text = file_get_contents($_POST['file']);
    //If the $text is not empty.
    if (strlen($text) > 0) {
      //Find every occurance of $search in the string $text with substr_count()
      $found = substr_count($text, $search);
      //If $found is bigge then 0 and preg_match also returns true (as a extra check).
      if ($found > 0 && preg_match("/$search/", $text)) {
        echo "The character $search occurs $found times in the document.";
      } else {
        echo "The character $search can not be found in the document.";
      }
    }
  }
?>
