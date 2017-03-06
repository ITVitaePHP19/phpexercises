<?php

	if(isset($_POST["submit"])){
	
	$images = $_POST["image"];
	// $jackie = '<img src="images\Jackie.jpg">';
	
	
	switch ($images) {
    case "mountain":
        echo '<h1>This is correct</h1>
		<div style="position:relative;height:0;padding-bottom:56.25%">
		<iframe src="https://www.youtube.com/embed/TAryFIuRxmQ?rel=0&autoplay=1" width="300" height="300" frameborder="0" style="position:absolute;width:30%;height:30%;left:0" allowfullscreen></iframe></div>';
		
		
		
        break;
    case "river":
     //   echo "No it is not a river, please try again";
      echo '<div>
	<h3><a href="fotoherkennen.php">Please try again</a></h3>
	<img src="images\Jackie.jpg"></div>
	<br><br>
	<div><h2>This is a River</h2>
	<img src="images\river.jpg"></div>
	</div>
	<div>';

	  break;
    case "sea":
        echo '<div>
	<h3><a href="fotoherkennen.php">Please try again</a></h3>
	<img src="images\Jackie.jpg"></div>
	<br><br>
	<div><h2>This is the Sea</h2>
	<img src="images\sea.jpg"></div>
	</div>
	<div>';
		break;
	case "plain":
        echo '<div>
	<h3><a href="fotoherkennen.php">Please try again</a></h3>
	<img src="images\Jackie.jpg"></div>
	<br><br>
	<div><h2>This is a Plain</h2>
	<img src="images\plain.jpg"></div>
	</div>
	<div>';
   break;
    default:
        echo "Please select an option";
}
	
	
	
	
	
	
	
	
}

?>