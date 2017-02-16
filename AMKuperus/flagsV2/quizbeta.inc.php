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
    $_SESSION['randomFlags'] = $randomFlags;
    echo "<h3>Welcome to the quiz, goodluck!</h3>";
  } else {
    //Pull the arrays from session
    $answers = $_SESSION['answers'];
    $randomFlags = $_SESSION['randomFlags'];
    //Show the amount off quizitems
    echo 'There are: ' . count($randomFlags) . ' items in the quiz.<br>';
    //Push the answer in $_POST['answer'] and put them in $answers[]
    if(isset($_POST['answer'])) {
      array_push($answers, $_POST['answer']);
      $_SESSION['answers'] = $answers;
      print_r($answers);
      echo '<br>';
    }
    //Start the quiz
    if(count($answers) < count($randomFlags)) {
      //Setup counter
      $count = count($answers);
      echo 'Answered questions: ' . $count . '<hr>';
      //Show the flag for the quiz.
      echo '<figure><img src="' . $randomFlags[$count] . '" width="600" height="400">
            </figure>';
      //Setting answers
      $ab = createAnswerArray($randomFlags, $count);
      //Putting answers inbetween html-tags
      createAnswers($ab, $randomFlags, $dir);
    } else {
      //Give the result by comparing the 2 arrays
      for ($i = 0; $i < count($randomFlags); $i++) {
        //Loop trough the randomFlags[] and compare it with anwers[]
        if ($randomFlags[$i] === $answers[$i]) {
          //When the answer matches the question
          echo "$randomFlags[$i] is the correct answer!<br>";
        } else {
          //When the answer does not match
          echo "$answer[$i] is not correct, it should have been $randomFlags[$i]<br>";
        }
      }
    }
    echo "<hr>";
    print_r($randomFlags);
  }

  //Create 3 random answers and the correct answer.
  //Prep them with HTML-tags
  function createAnswerArray($array, $count) {
    //TODO Create a better version of the createAnswerArray as it does not work as expected currently
    //Create 3 random keys
    $a = array_rand($array, 3);
    //TODO Check if the correct answer is not already in the array, otherwise change it.
    if (!in_array($count, $a) && count($a) == 3) {
      //Add the 4th (correct answer $count) key
      array_push($a, $count);
      //Shuffle the array
      echo "--------------------------everyday I'm shuffling------------------<hr>";
      shuffle($a);
    } else {
      echo "---------------------recursing-------------------<hr>";
      print_r($a);
      createAnswerArray($array, $count);
    }
    return $a;
  }

  //Echo a input type radio field to the form with the answers
  function createAnswers($answerArray, $baseArray, $dir) {
    //Grab each key and change it to a prepped html-input-tags
    foreach($answerArray as $q) {
      echo '<input type="radio" value="' . $baseArray[$q] . '" name="answer">' .
      createName($baseArray[$q], $dir) . '<br>';
    }
  }
?>
<input type="submit" value="Next>>>">
<input type="submit" value="Empty arrays" name="unset">
</form>
