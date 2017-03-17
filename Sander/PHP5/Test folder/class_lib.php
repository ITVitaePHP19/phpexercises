<?php

/* Part 1 */

class person1 {

	var $name;

	function set_name($new_name) {
		$this -> name = $new_name;
	}

	function get_name() {
		return $this -> name;
	}

}



/* Part 2 */

class person2 {
	var $name;
	function __construct ($persons_name) {
		$this -> name = $persons_name;
	}

	function set_name ($new_name) {
	 	 $this -> name = $new_name;
	}

	function get_name () {
	 	 return $this -> name;
	}

}	 	



/* Part 3 */
	
class person3 {

	var $name;		
	public $height;		
	protected $social_insurance;
	private $pinn_number;

	function __construct($persons_name) {		
		$this->name = $persons_name;		
	}		

	function set_name($new_name) {   	
		$this->name = $new_name;
	}	

	function get_name() {
		return $this->name;
	}		
 
}

?>