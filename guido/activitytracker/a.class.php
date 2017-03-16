<?php
//initialize instance of class A
$object = new A;
$object->connection = $connection;
class A {
//$connection set as public as it's being used outside of the class as well
  public $connection;
//function to pass each item through the real_escape_string method, strip out characters
//to prevent hacking (filter_input is a safer method) - (use htmlentities instead of real_escape_string)
  public function get_post($var)
  {
    if(isset($_POST[$var])) {
        return $this->connection->real_escape_string($_POST[$var]);
    }
    else {
      return false;
    }
  }
}
?>
