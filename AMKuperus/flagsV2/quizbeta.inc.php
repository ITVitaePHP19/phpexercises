<form action="" method="POST">
<?php
  //Session destroy (remove when done)
  if(isset($_POST['unset'])) {
    session_destroy();
  }

  //If there is no session yet create the session, setting the arrays for the quiz.
  if(!isset($_SESSION['answers'])) {
    //Creating $answers-array[]
    $answers = [];
    $_SESSION['answers'] = $answers;
    //Creating randomFlags[]
    $randomFlags = [];
    $randomFlags = $files;
    shuffle($randomFlags);
    print_r($randomFlags);
    echo ">>>>>>>>>>>>>>>>This is first part of the loop<<<<<<<<<<<<<<<<<<<";
    echo "<hr>";
    $_SESSION['randomFlags'] = $randomFlags;
  } else {
    //Pull the arrays from session
    $answers = $_SESSION['answers'];
    $randomFlags = $_SESSION['randomFlags'];
    echo ">>>>>>>>>>>>>>>>>This is 2nd part of the loop<<<<<<<<<<<<<<<<<<<";
    echo count($randomFlags) . '<hr>';
    $count = count($answers);
    echo $count;
    //Start the quiz
    if(count($answers) < count($randomFlags)) {
      array_push($answers, "tst");
    }

    echo "<br>answers is set";
    $_SESSION['answers'] = $answers;
    print_r($answers);
  }
?>
<input type="submit" value="Submit">
<input type="submit" value="Empty array" name="unset">
</form>
