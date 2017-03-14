<?php
class yoyo{
    function salt(){
    }
    function pepper(){
        $this->salt();
    }
}
$y = new yoyo();
$y->pepper();
?>