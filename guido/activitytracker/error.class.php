<?php
//instance to create a new class named Error
$objError = new Error;
class Error {
//class variable, set to public for it to be used outside the class
//$message is not used anywhere other than in this class, so can be private
  public $message;
//public function so it can be called outside the class
  public function isError() {
    if(isset($this->message)) {
        return true;
    } else {
        return false;
    }

  }
}
 ?>
