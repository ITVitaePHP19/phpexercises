<?php
//Creating a session so we can have a string holding everything that was pressed
//on the calculator.
//Saving the string to $_SESSION['output']
session_start();
if(!isset($_SESSION['output'])) {
  $_SESSION['output'] = '';
}
//If there is something in POST then do the switch.
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    switch(isset($_POST)) {
      //Filtering what button was pressed and adding the value of the button
      //pressed to the string.
      case isset($_POST['1']):
        $_SESSION['output'] .= "1";
        break;
      case isset($_POST['2']):
        $_SESSION['output'] .= "2";
        break;
      case isset($_POST['3']):
        $_SESSION['output'] .= "3";
        break;
      case isset($_POST['4']):
        $_SESSION['output'] .= "4";
        break;
      case isset($_POST['5']):
        $_SESSION['output'] .= "5";
        break;
      case isset($_POST['6']):
        $_SESSION['output'] .= "6";
        break;
      case isset($_POST['7']):
        $_SESSION['output'] .= "7";
        break;
      case isset($_POST['8']):
        $_SESSION['output'] .= "8";
        break;
      case isset($_POST['9']):
        $_SESSION['output'] .= "9";
        break;
      case isset($_POST['0']):
        $_SESSION['output'] .= "0";
        break;
      case isset($_POST['c']):
      //Emptying the string.
        $_SESSION['output'] = '';
        break;
      case isset($_POST['+']):
        $_SESSION['output'] .= "+";
        break;
      case isset($_POST['-']):
        $_SESSION['output'] .= "-";
        break;
      case isset($_POST['divide']):
        $_SESSION['output'] .= "/";
        break;
      case isset($_POST['times']):
        $_SESSION['output'] .= "*";
        break;
      case isset($_POST['=']):
      //Both work, but calculate_string() is a safer function then eval()
      //Left the code here as example.
        //$string = $_SESSION['output'];
        //$p = "return ($string);";
        //$_SESSION['output'] = eval($p);
        $val = $_SESSION['output'];
        $_SESSION['output'] = calculate_string($val);
        break;
    }
  }
  echo $_SESSION['output'];

  //Calculate a string, in a safer way then with eval()
  function calculate_string( $mathString )    {
    $mathString = trim($mathString);     // trim white spaces
    $mathString = ereg_replace ('[^0-9\+-\*\/\(\) ]', '', $mathString);    // remove any non-numbers chars; exception for math operators

    $compute = create_function("", "return (" . $mathString . ");" );
    return 0 + $compute();
}
?>
