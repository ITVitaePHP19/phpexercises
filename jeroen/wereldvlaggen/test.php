<?php
$json = file_get_contents("flags/countries.json");

$jsonIterator = new RecursiveIteratorIterator(new RecursiveArrayIterator(json_decode($json, TRUE)),
RecursiveIteratorIterator::SELF_FIRST);

foreach($jsonIterator as $key => $val){
	if($key == "name"){
		$name=$val;
		echo $name."<br>";
	}
	if ($key == "code"){
		echo "$key => $val <br>";
	}
}

?>