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
    $randomItems = [];
    $randomItems = $files;
    shuffle($randomItems);
    $_SESSION['randomItems'] = $randomItems;
    echo "<h3>Welcome to the quiz, goodluck!</h3>";
  } else {
    //Pull the arrays from session
    $answers = $_SESSION['answers'];
    $randomItems = $_SESSION['randomItems'];
    //Show the amount off quizitems
    echo 'There are: ' . count($randomItems) . ' items in the quiz.<br>';
    //Push the answer in $_POST['answer'] and put them in $answers[]
    if(isset($_POST['answer'])) {
      array_push($answers, $_POST['answer']);
      $_SESSION['answers'] = $answers;
    }
    //Start the quiz
    if(count($answers) < count($randomItems)) {
      //Setup counter
      $count = count($answers);
      echo 'Answered questions: ' . $count . '<hr>';
      //Show the flag for the quiz.
      echo '<figure><img src="' . $randomItems[$count] . '" width="600" height="400">
            </figure>';
      //Setting answers
      //$ab = createAnswerArray($randomFlags, $count);
      $ab = createAnswerArray($count, count($randomItems));
      //Putting answers inbetween html-tags
      createAnswers($ab, $randomItems, $dir);
    } else {
      //Give the result by comparing the 2 arrays
      for ($i = 0; $i < count($randomItems); $i++) {
        //Loop trough the randomFlags[] and compare it with anwers[]
        if ($randomItems[$i] === $answers[$i]) {
          //When the answer matches the question
          echo "$randomItems[$i] is the correct answer!<br>";
        } else {
          //When the answer does not match
          echo "$answer[$i] is not correct, it should have been $randomItems[$i]<br>";
        }
      }
    }
  }

  //Create a array with the answer-key and 3 random-generated keys to generate
  //randomized answers.
  function createAnswerArray($count, $size) {
    //Create array to work with and fill it with answer-key
    $a = [];
    array_push($a, $count);
    //Lop while there is not 4 in the array keeps filling, until it contains 4 items.
    while(count($a) < 4) {
      //Create a random number with ($size -1) being the maximum.
      $b = mt_rand(0, ($size - 1));
      //Check if the item already exists in the array, if TRUE do nothing and create
      //new random and repeat, if FALSE push the number in the array.
      if(!in_array($b, $a)) {
        array_push($a, $b);
      }
    }
    //Shuffle the array so it is randomized.
    shuffle($a);
    return $a;
  }

  //Echo a input type radio field to the form with the answers
  function createAnswers($answerArray, $baseArray, $dir) {
    //Grab each key and change it to a prepped html-input-tags
    foreach($answerArray as $q) {
      echo '<input type="radio" value="' . $baseArray[$q] . '" name="answer" required>' .
      createName($baseArray[$q], $dir) . '<br>';
    }
  }
?>
<input type="submit" value="Next>>>">
<input type="submit" value="Empty arrays" name="unset">
</form>
