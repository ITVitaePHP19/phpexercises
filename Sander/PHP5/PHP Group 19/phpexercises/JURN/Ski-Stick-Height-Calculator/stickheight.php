<DOCTYPE! html>

<html>
<?php
if (isset($_POST['calculate'])) {
	calculateStickheight();
}
function calculateStickheight() {
		$input = $_POST['in'];
		$classical = $input * 0.9;
		$freestyle = $input * 0.85;
		$nordic = $input * 0.68;
			
		if ($_POST['height'] == "classical") {
			echo "When you are $input cm tall and go cross-country classical walking, you need a stick that is about $classical cm";
			}
		elseif ($_POST['height'] == "freestyle") {
			echo "When you are $input cm tall and go cross-country free-style walking, you need a stick that is about $freestyle cm";
			}
		elseif ($_POST['height'] == "nordic") {
			echo "When you are $input cm tall and go nordic-walking, you need a stick that is about $nordic cm";
			}

}
?>
<p>
<a href="ski-stick.html">back to the calculator</a>
</p>
</html>