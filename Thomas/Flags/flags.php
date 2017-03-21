<?php
function giveName($flag, $img)
{
	$orig = array($img, ".png");
	$rep = str_replace($orig, "" , $flag);
	return $rep;
}
?>