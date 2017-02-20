<?php
if (isset($_POST['calculate'])) {
	skiStick();
}

function skiStick() {
		$input = $_POST['in'];
		$freeStyle = $input * 0.9;
		$classic = $input * 0.85;
		$nordic = $input * 0.68;
			if ($_POST['ski'] == "free") {
			echo "your ski-stick height for Free-Style should be $freeStyle";

		} elseif ($_POST['ski'] == "classical") {

			echo "your ski-stick height for Classical style should be $classic";

		} elseif ($_POST['ski'] == "nordic") {
			echo "your ski-stick height for Nordic Walk should be $nordic";
		}
}
?>
