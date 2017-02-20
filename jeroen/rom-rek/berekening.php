<?php
$inputA="";
$inputB="";
$countA="";
$countB="";
$answer="";
$operator="";
$errMessage="";

if (isset($_POST['='])){
	$inputA= strtoupper($_POST['inputA']);
	//validation niet volledig
	if ($inputA=="VV" or $inputA=="LL" or $inputA=="DD" or $inputA=="VVV" or $inputA=="LLL" or $inputA=="DDD" or $inputA=="DDD"){
			$errMessage= "*".$inputA . " in het eerste veld is een ongeldige waarde.";
			$inputA="";
	}
	$inputB= strtoupper($_POST['inputB']);
	//validation niet volledig
	if ($inputB=="VV" or $inputB=="LL" or $inputB=="DD" or $inputB=="VVV" or $inputB=="LLL" or $inputB=="DDD" or $inputB=="DDD"){
		$errMessage= "*".$inputB . " in het tweede veld is een ongeldige waarde.";
		$inputB="";
	}
	$operator= strtoupper($_POST['operator']);
}

$inputs = array(
	'M' => 1000,
	'CM' => 900,
	'D' => 500,
	'CD' => 400,
	'C' => 100,
	'XC' => 90,
	'L' => 50,
	'XL' => 40,
	'X' => 10,
	'IX' => 9,
	'V' => 5,
	'IV' => 4,
	'I' => 1,
	'O' => 0,
);

function transform_to_arab(&$input, &$count){
	global $inputs;
	foreach ($inputs as $roman => $value){
		while (strpos($input, $roman)===0){
			$count += $value;
			$input = substr($input, strlen($roman));
		}
	}
}
transform_to_arab($inputA, $countA);
transform_to_arab($inputB, $countB);

function transform_to_roman($integer){ 
    $return = "";
	global $inputs;
    while($integer > 0){ 
        foreach($inputs as $roman=>$value){ 
            if($integer >= $value){ 
                $integer -= $value; 
                $return .= $roman;
                break;
            } 
        } 
    }
    return $return; 
}

$total = $countA . $operator . $countB;
$answer = eval('return ' . $total . ';');

?>