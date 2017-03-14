<h1> Currency calculator</h1>



<?php  
	//Deze functie is om actie te ondernemen als de submit knop is ingedrukt
	if(isset($_POST["submit"])){
		
	//dit is om alvast een variabele te maken voor al die valuta's zodat er gemakkelijker mee te werken is bij de switch statement
	$dollar = 1.8;
	$hkgdollar = .7;
	$franc =  2.5;
	$mark = 2.1;
	$gulden =  2.2;
	$neppeValuta = 9.9;
	$koersen = $_POST['koersen'];
	$number = $_POST['number'];
	//$check = $_POST['number'];
	
	//$format = number_format(($check),2);  <   Ik wilde eerst dat het automatisch na de berekening van de valauta ging formatteren naar 19,50 in plaats van 19,503454353 Dit wordt gebruikt in de switch statement.
	
	//De empty functie checkt als het veld leeg is nadat er op submit/calculate is gedrukt
	if(empty($number) ){
		echo "Fill in the form";
		//De numeric functie checkt als er een nummer is ingevuld
	}else if(!is_numeric($number)) {
	echo "Put a numeric value";
	//De stren functie checkt als het langer is dan 4 cijfers 
	 }else if(strlen($number)  > 9) {
	echo "Your numbers are too long";
	}
	else{
	//Deze switch statement gebruik ik om de geselecteerde valuta bij options te gebruiken zodat het de juiste valuta pakt.
	switch($koersen){

	case 'dollar':
		echo number_format(($number * $dollar),2);
		break;
	case 'hkgdollar':
   echo number_format(($number * $hkgdollar),2);
    break;
	case 'franc':
   echo number_format(($number * $franc),2);
   break;
   case 'mark':
	echo number_format(($number * $mark),2);
	break;  //<break vergeten, er kwam eerst een apart getal uit bij mark
   case 'gulden':
   echo number_format(($number * $gulden),2);
   break;
	default:
		echo "nothing";
	}
	}
}
?>