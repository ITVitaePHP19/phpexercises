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

    //Post the answer if there is POST
    if(isset($_POST['answer'])) {
      array_push($answers, $_POST['answer']);
      $_SESSION['answers'] = $answers;
      print_r($answers);
    }

    //Start the quiz
    if(count($answers) < count($randomFlags)) {
      //Setup counter
      $count = count($answers);
      echo $count;//TODO count wont work correctly with combination of the array why>?

      //Show the flag for the quiz.
      echo '<figure><img src="' . $randomFlags[$count] . '" width="600" height="400">
            </figure>';
      //array_push($answers, $randomFlags[$count]);
      createAnswers($randomFlags, $count, $dir);

    }

    echo "<br>answers is set";
    echo "<hr>";
    print_r($randomFlags);
  }

  //Create 3 random answers and the correct answer.
  //Prep them with HTML-tags
  function createAnswers($array, $count, $dir) {
    //Create 3 random keys
    $a = array_rand($array, 3);
    //Add the 4th (correct answer) key
    array_push($a, $count);
    //Grab each key and change it to a prepped html-line
    foreach($a as $q) {
      echo '<input type="radio" value="' . $array[$q] . '" name="answer">' .
      createName($array[$q], $dir) . '</option>';
    }
  }
?>
<input type="submit" value="Submit">
<input type="submit" value="Empty array" name="unset">
</form>
