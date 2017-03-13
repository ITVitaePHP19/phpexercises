<?php
// phpinfo();

//OP1
function multiples3and5()
{
	echo 	"If we list all the natural numbers below 10 that are multiples of 3 or 5,<br>" .
			"we get 3, 5, 6 and 9. The sum of these multiples is 23.<br>" . 
			"Find the sum of all the multiples of 3 or 5 below 1000.<br><br>";
	
	$number = 0;
	for($i = 1; $i < 1000; $i++)
	{
		if($i %3 == 0)
		{
		  $number += $i;
		  echo $i . ": " . $number . "<br>";
		}
		elseif($i %5 == 0)
		{
		  $number += $i;
		  echo $i . ": " . $number . "<br>";
		}
		
	}
}


//OP 2fibonacci
function fibonacci($n, $first = 0,$second = 1)
{
	echo 	"Each new term in the Fibonacci sequence is generated by adding the previous two terms.<br>" . 
			"By starting with 1 and 2, the first 10 terms will be: 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...<br>" .
			"By considering the terms in the Fibonacci sequence whose values do not exceed four million, find the sum of the even-valued terms.<br>";
	
	$fib = [$first,$second];
	
	$number2 = 0;
	
	for($i = 1; $i <= $n; $i++){
		$fib[] = $fib[$i] + $fib[$i - 1];
		
		if($fib[$i] %2 == 0){
			$number2 = $number2 + $fib[$i];
			echo "<br>" . $i . ": " . $fib[$i] . " - " . $number2 . "<br>";
		}				
	}
	echo "<br><br>";
	return $fib;
}		
// OP3 prime factor of 600851475143
function primeFactor()
{
	echo 	"The prime factors of 13195 are 5, 7, 13 and 29.<br>" .
			"What is the largest prime factor of the number 600851475143 ?<br><br>";
	
	$pf = 600851475143;
	
	for($i = 0; $i < 10000; gmp_nextprime($i)){
		$i = (int)gmp_nextprime($i);
		// echo "Primefactor: " . $i . "<br>";
		
		while(fmod($pf, $i) == 0){
			echo $pf . " / " . $i . " = " . ($pf = $pf / $i) . "<br>";
		}
	}
}

// OP4 Palindrome
function palindrome()
{
	echo 	"A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.<br>" . 
			"Find the largest palindrome made from the product of two 3-digit numbers.<br><br>";
	$pal = 0;
	$palres = array();
	// loop through all 3 digit extensions
	for($i = 100; $i < 1000; $i++){
		for($i2 = 100; $i2 < 1000; $i2++)
		{
			// int to string
			$pal = strval($i * $i2);
			// int reversed
			$lap = strrev($pal);
								
			// echo $lap . " " . $pal . "<br>";
			
			// compare
			if($lap == $pal)
			{				
				$palres[] = $lap;
			}
		}
	}
	echo "Largest palindrome: " . max($palres);
}

// palindrome();
		
// OP5 Smallest Multiple
function multiples()
{
	
	echo 	"2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.
			What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?<br><br>";
	
	for($i = 2520; $i < 300000000; $i+=20){
		$n = 1;
		
		while($n < 21 && ($i %$n == 0)){
			$n ++;
			if($n == 20){
				echo $i . "<br>";
			}
		}
	}
}
		
// OP6
function sumSquare(){
	
	echo 	"<br>The sum of the squares of the first ten natural numbers is, 12 + 22 + ... + 102 = 385" . 
			" The square of the sum of the first ten natural numbers is, (1 + 2 + ... + 10)2 = 552 = 3025" .
			" Hence the difference between the sum of the squares of the first ten natural numbers and the square of the sum is 3025 − 385 = 2640." .
			" Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.<br><br>";
	
	$sumArray = array();
	
	for($i = 1; $i < 101; $i++){
		echo $i . ": " . $i * $i . "<br>";
		
		$sumArray[] = $i * $i;
		$squareArray[] = $i;
	}
	
	$sum = array_sum($sumArray);
	echo "<br><br>Sum of the Squares: " . $sum;
	
	$squareSum = array_sum($squareArray) * array_sum($squareArray);
	echo "<br><br>Square of the Sum: " . $squareSum;
	
	echo "<br><br>Difference: " . $squareSum . " - " . $sum . " = " . ($squareSum - $sum);

}
		
//OP 7 10001st prime
function prime10001(){
	echo 	"By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13." . 
			"What is the 10 001st prime number?<br><br>";
	
	$primeArray = array();
	
	for($i = 0; $i < 150000; gmp_nextprime($i)){
		$i = (int)gmp_nextprime($i);
		
		$primeArray[] = $i;
		// echo count($primeArray) . ". count: " . $i . "<br>";
		
		if(count($primeArray) == 10001){
			echo "---" . $i . "---";
		}
		
	}
}
		
//OP 8 
function digits(){
	echo "<br>";
	echo "<br>";
	
	$digits =	"73167176531330624919225119674426574742355349194934" .
				"96983520312774506326239578318016984801869478851843" .
				"85861560789112949495459501737958331952853208805511" .
				"12540698747158523863050715693290963295227443043557" .
				"66896648950445244523161731856403098711121722383113" .
				"62229893423380308135336276614282806444486645238749" .
				"30358907296290491560440772390713810515859307960866" .
				"70172427121883998797908792274921901699720888093776" .
				"65727333001053367881220235421809751254540594752243" .
				"52584907711670556013604839586446706324415722155397" .
				"53697817977846174064955149290862569321978468622482" .
				"83972241375657056057490261407972968652414535100474" .
				"82166370484403199890008895243450658541227588666881" .
				"16427171479924442928230863465674813919123162824586" .
				"17866458359124566529476545682848912883142607690042" .
				"24219022671055626321111109370544217506941658960408" .
				"07198403850962455444362981230987879927244284909188" .
				"84580156166097919133875499200524063689912560717606" .
				"05886116467109405077541002256983155200055935729725" .
				"71636269561882670428252483600823257530420752963450";
				
			$output = str_split($digits, 50);
				
	echo "The four adjacent digits in the 1000-digit number that have the greatest product are 9 × 9 × 8 × 9 = 5832.<br><br>"; 
			
	for($i = 0; $i < count($output); $i++){ echo $output[$i] . "<br>"; }
	
	echo "<br>Find the thirteen adjacent digits in the 1000-digit number that have the greatest product. What is the value of this product?<br><br>";		
				
	/* get all substrings of 13 characters */
	for($i = 0; $i < 988; $i++){
		$thirteen[$i] = substr($digits, $i, 13);
		
		$character = array();
		
		// seperate the characters in the above strings of 13
		for($r = 0; $r < 13; $r++){
			$character[$r] = substr($thirteen[$i], $r, 1);
		}
		
		// calculate the product of the string arrays of 13
		$product[$i] = array_product($character);
		
		if($product[$i] !== 0)
		{
			echo $i . ": <br>";
			for($r = 0; $r < 13; $r++)
			{
				echo $character[$r] . " | ";
			}
			echo "<br>product: " . $product[$i] . "<br><br>";
		}				
	}
	echo "<br>Max is: " . max($product);

}
		
//OP9 Pythagoras
function pythagoras(){
	
	echo 	"<br>A Pythagorean triplet is a set of three natural numbers, a < b < c, for which, a2 + b2 = c2" .
			"<br>For example, 32 + 42 = 9 + 16 = 25 = 52." .
			"<br>There exists exactly one Pythagorean triplet for which a + b + c = 1000." . 
			"<br>Find the product abc.<br><br>";
	
	$triplet = 1000;
	$a;
	$b;
	$c;
	
	//loop through "a = 1t/m 999"
	for($i = 1; $i < $triplet; $i++){
		$a = $i;
		//loop throuh remainder and assign it to b and c
		for($n = 1; $n < ($triplet - $a); $n++){
			$b = $n;
			$c = $triplet - ($a + $b);
			
			// echo ($a * $a) + ($b * $b) . " - " . $c . "<br>";
			if(($a * $a) + ($b * $b) == ($c * $c)){
				echo "a is: " . $a . "<br>";
				echo "b is: " . $b . "<br>";
				echo "c is: " . $c . "<br>";
				echo "product is: " . $a * $b * $c . "<br><br>";
			}
		}
	}
}
		
//OP 10 Prime Millions
function primeMillions(){
	
	echo 	"The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17." . 
			" Find the sum of all the primes below two million.<br><br>";

	$primeArray = array();
	
	$counter = 0;
	
	for($i = 0; $i < 2000000; gmp_nextprime($i)){
		$i = (int)gmp_nextprime($i);
		
		$counter += $i;
		
		if($i < 2000000 && (int)gmp_nextprime($i) >= 2000000)
			echo "Prime: " . $i . "<br>Sum: " . $counter;
	}
}

		
		
// OP11
function multiGrid(){
	$grid = array(
		$row1 = array(8, 02, 22, 97, 38, 15, 00, 40, 00, 75, 04, 05, 07, 78, 52, 12, 50, 77, 91, 8),
		$row2 = array(49, 49, 99, 40, 17, 81, 18, 57, 60, 87, 17, 40, 98, 43, 69, 48, 04, 56, 62, 00),
		$row3 = array(81, 49, 31, 73, 55, 79, 14, 29, 93, 71, 40, 67, 53, 88, 30, 03, 49, 13, 36, 65),
		$row4 = array(52, 70, 95, 23, 04, 60, 11, 42, 69, 24, 68, 56, 01, 32, 56, 71, 37, 02, 36, 91),
		$row5 = array(22, 31, 16, 71, 51, 67, 63, 89, 41, 92, 36, 54, 22, 40, 40, 28, 66, 33, 13, 80),
		$row6 = array(24, 47, 32, 60, 99, 03, 45, 02, 44, 75, 33, 53, 78, 36, 84, 20, 35, 17, 12, 50),
		$row7 = array(32, 98, 81, 28, 64, 23, 67, 10, 26, 38, 40, 67, 59, 54, 70, 66, 18, 38, 64, 70),
		$row8 = array(67, 26, 20, 68, 02, 62, 12, 20, 95, 63, 94, 39, 63, 8, 40, 91, 66, 49, 94, 21),
		$row9 = array(24, 55, 58, 05, 66, 73, 99, 26, 97, 17, 78, 78, 96, 83, 14, 88, 34, 89, 63, 72),
		$row10 = array(21, 36, 23, 9, 75, 00, 76, 44, 20, 45, 35, 14, 00, 61, 33, 97, 34, 31, 33, 95),
		$row11 = array(78, 17, 53, 28, 22, 75, 31, 67, 15, 94, 03, 80, 04, 62, 16, 14, 9, 53, 56, 92),
		$row12 = array(16, 39, 05, 42, 96, 35, 31, 47, 55, 58, 88, 24, 00, 17, 54, 24, 36, 29, 85, 57),
		$row13 = array(86, 56, 00, 48, 35, 71, 89, 07, 05, 44, 44, 37, 44, 60, 21, 58, 51, 54, 17, 58),
		$row14 = array(19, 80, 81, 68, 05, 94, 47, 69, 28, 73, 92, 13, 86, 52, 17, 77, 04, 89, 55, 40),
		$row15 = array(04, 52, 8, 83, 97, 35, 99, 16, 07, 97, 57, 32, 16, 26, 26, 79, 33, 27, 98, 66),
		$row16 = array(88, 36, 68, 87, 57, 62, 20, 72, 03, 46, 33, 67, 46, 55, 12, 32, 63, 93, 53, 69),
		$row17 = array(04, 42, 16, 73, 38, 25, 39, 11, 24, 94, 72, 18, 8, 46, 29, 32, 40, 62, 76, 36),
		$row18 = array(20, 69, 36, 41, 72, 30, 23, 88, 34, 62, 99, 69, 82, 67, 59, 85, 74, 04, 36, 16),
		$row19 = array(20, 73, 35, 29, 78, 31, 90, 01, 74, 31, 49, 71, 48, 86, 81, 16, 23, 57, 05, 54),
		$row20 = array(01, 70, 54, 71, 83, 51, 54, 69, 16, 92, 33, 48, 61, 43, 52, 01, 89, 19, 67, 48)
		);
		
		$array = array();
		
		for($i = 0; $i < 20; $i++){
			
			for($n = 0; $n < 20; $n++){
				echo $grid[$i][$n] . "|";
			}
			echo "<br>";
		}
		
		for($i = 0; $i < 20; $i++){
			
			for($n = 0; $n < 20; $n++){
				
				$hvd = $grid[$i][$n];
				$h1;
				$h2;
				$h3;
				$v1;
				$v2;
				$v3;
				$d1;
				$d2;
				$d3;
				$r1;
				$r2;
				$r3;
										
				if(isset($grid[$i][$n + 1])){
					$h1 = $grid[$i][$n + 1];
				}else{$h1 = 1;}
				
				if(isset($grid[$i][$n + 2])){
					$h2 = $grid[$i][$n + 2];
				}else{$h2 = 1;}
				
				if(isset($grid[$i][$n + 3])){
					$h3 = $grid[$i][$n + 3];
				}else{$h3 = 1;}
				
				$horizontal = $hvd * $h1 * $h2 * $h3;
				
				if(isset($grid[$i +1][$n])){
					$v1 = $grid[$i + 1][$n];
				}else{$v1 = 1;}
				
				if(isset($grid[$i + 2][$n])){
					$v2 = $grid[$i + 2][$n];
				}else{$v2 = 1;}
				
				if(isset($grid[$i + 3][$n])){
					$v3 = $grid[$i + 3][$n];
				}else{$v3 = 1;}
				
				$vertical = $hvd * $v1 * $v2 * $v3;
				
				if(isset($grid[$i +1][$n +1])){
					$d1 = $grid[$i + 1][$n +1];
				}else{$d1 = 1;}
				
				if(isset($grid[$i + 2][$n + 2])){
					$d2 = $grid[$i + 2][$n + 2];
				}else{$d2 = 1;}
				
				if(isset($grid[$i + 3][$n + 3])){
					$d3 = $grid[$i + 3][$n + 3];
				}else{$d3 = 1;}
				
				$diagonal = $hvd * $d1 * $d2 * $d3;
				
				if(isset($grid[$i + 1][$n - 1])){
					$r1 = $grid[$i + 1][$n - 1];
				}else{$r1 = 1;}
				
				if(isset($grid[$i + 2][$n - 2])){
					$r2 = $grid[$i + 2][$n - 2];
				}else{$r2 = 1;}
				
				if(isset($grid[$i + 3][$n - 3])){
					$r3 = $grid[$i + 3][$n - 3];
				}else{$r3 = 1;}
				
				$rdiagonal = $hvd * $r1 * $r2 * $r3;
				
				
				// echo "row: " . ($i + 1) . " column: " . ($n + 1) . "<br>" . $horizontal . " | " . $vertical . " | " . $diagonal . " | " . $rdiagonal . "<br><br>";
			
				$array[] = $horizontal;
				$array[] = $vertical;
				$array[] = $diagonal;
				$array[] = $rdiagonal;
			}
		}
		echo "<br>Max is " . max($array);
}
		
//OP12 Triangular nogwat
function triangular(){		

	echo 	"The sequence of triangle numbers is generated by adding the natural numbers. So the 7th triangle number would be 1 + 2 + 3 + 4 + 5 + 6 + 7 = 28. The first ten terms would be:<br>" .
			"1, 3, 6, 10, 15, 21, 28, 36, 45, 55, ...<br>" .
			"Let us list the factors of the first seven triangle numbers:<br>" .
			"1: 1<br>" .
			"3: 1,3<br>" .
			"6: 1,2,3,6<br>" .
			"10: 1,2,5,10<br>" .
			"15: 1,3,5,15<br>" .
			"21: 1,3,7,21<br>" .
			"28: 1,2,4,7,14,28<br>" .
			"We can see that 28 is the first triangle number to have over five divisors.<br>" .
			"What is the value of the first triangle number to have over five hundred divisors?<br><br>";
			
	ini_set('max_execution_time', 9000);
	ini_set('memory_limit','2048M');
	
	$triangular = 0;
	$divisors = 1;
	
	// counter
	for($i = 1; $i < 15000000; $i++){
		$triangular = $triangular + $i; //triangular getal
		
		echo $i . " - " . $triangular . ": ";
		
		
		$counter = 0; //counter om aantal divisors bij te houden per triangular
		
		// probeer te delen zolang de deler niet groter is dan het te delen getal
		while($divisors <= $triangular){ 
			
			if($triangular %$divisors == 0){
				$counter++;
			}
			$divisors++;
		}
		// als er meer dan 500 divisors zijn
		if($counter >= 500){
			echo "-----" . $triangular . "-----" . $divisors;
			break;
		}
		echo $counter . "<br>"; 
		$divisors = 1;
	}
}
// triangular();
		
//Op13 Large Sum
function largeSum(){
	
	echo "Work out the first ten digits of the sum of the following one-hundred 50-digit numbers.<br><br>";
	
	$total = 0;
	
	$fiftyDigits = array(
						array("37107287533902102798797998220837590246510135740250"),
						array("46376937677490009712648124896970078050417018260538"),
						array("74324986199524741059474233309513058123726617309629"),
						array("91942213363574161572522430563301811072406154908250"),
						array("23067588207539346171171980310421047513778063246676"),
						array("89261670696623633820136378418383684178734361726757"),
						array("28112879812849979408065481931592621691275889832738"),
						array("44274228917432520321923589422876796487670272189318"),
						array("47451445736001306439091167216856844588711603153276"),
						array("70386486105843025439939619828917593665686757934951"),
						array("62176457141856560629502157223196586755079324193331"),
						array("64906352462741904929101432445813822663347944758178"),
						array("92575867718337217661963751590579239728245598838407"),
						array("58203565325359399008402633568948830189458628227828"),
						array("80181199384826282014278194139940567587151170094390"),
						array("35398664372827112653829987240784473053190104293586"),
						array("86515506006295864861532075273371959191420517255829"),
						array("71693888707715466499115593487603532921714970056938"),
						array("54370070576826684624621495650076471787294438377604"),
						array("53282654108756828443191190634694037855217779295145"),
						array("36123272525000296071075082563815656710885258350721"),
						array("45876576172410976447339110607218265236877223636045"),
						array("17423706905851860660448207621209813287860733969412"),
						array("81142660418086830619328460811191061556940512689692"),
						array("51934325451728388641918047049293215058642563049483"),
						array("62467221648435076201727918039944693004732956340691"),
						array("15732444386908125794514089057706229429197107928209"),
						array("55037687525678773091862540744969844508330393682126"),
						array("18336384825330154686196124348767681297534375946515"),
						array("80386287592878490201521685554828717201219257766954"),
						array("78182833757993103614740356856449095527097864797581"),
						array("16726320100436897842553539920931837441497806860984"),
						array("48403098129077791799088218795327364475675590848030"), 
						array("87086987551392711854517078544161852424320693150332"),
						array("59959406895756536782107074926966537676326235447210"),
						array("69793950679652694742597709739166693763042633987085"),
						array("41052684708299085211399427365734116182760315001271"),
						array("65378607361501080857009149939512557028198746004375"),
						array("35829035317434717326932123578154982629742552737307"),
						array("94953759765105305946966067683156574377167401875275"),
						array("88902802571733229619176668713819931811048770190271"),
						array("25267680276078003013678680992525463401061632866526"),
						array("36270218540497705585629946580636237993140746255962"),
						array("24074486908231174977792365466257246923322810917141"),
						array("91430288197103288597806669760892938638285025333403"),
						array("34413065578016127815921815005561868836468420090470"),
						array("23053081172816430487623791969842487255036638784583"),
						array("11487696932154902810424020138335124462181441773470"),
						array("63783299490636259666498587618221225225512486764533"),
						array("67720186971698544312419572409913959008952310058822"),
						array("95548255300263520781532296796249481641953868218774"),
						array("76085327132285723110424803456124867697064507995236"),
						array("37774242535411291684276865538926205024910326572967"),
						array("23701913275725675285653248258265463092207058596522"),
						array("29798860272258331913126375147341994889534765745501"),
						array("18495701454879288984856827726077713721403798879715"),
						array("38298203783031473527721580348144513491373226651381"),
						array("34829543829199918180278916522431027392251122869539"),
						array("40957953066405232632538044100059654939159879593635"),
						array("29746152185502371307642255121183693803580388584903"),
						array("41698116222072977186158236678424689157993532961922"),
						array("62467957194401269043877107275048102390895523597457"),
						array("23189706772547915061505504953922979530901129967519"),
						array("86188088225875314529584099251203829009407770775672"),
						array("11306739708304724483816533873502340845647058077308"),
						array("82959174767140363198008187129011875491310547126581"),
						array("97623331044818386269515456334926366572897563400500"),
						array("42846280183517070527831839425882145521227251250327"),
						array("55121603546981200581762165212827652751691296897789"),
						array("32238195734329339946437501907836945765883352399886"),
						array("75506164965184775180738168837861091527357929701337"),
						array("62177842752192623401942399639168044983993173312731"),
						array("32924185707147349566916674687634660915035914677504"),
						array("99518671430235219628894890102423325116913619626622"),
						array("73267460800591547471830798392868535206946944540724"),
						array("76841822524674417161514036427982273348055556214818"),
						array("97142617910342598647204516893989422179826088076852"),
						array("87783646182799346313767754307809363333018982642090"),
						array("10848802521674670883215120185883543223812876952786"),
						array("71329612474782464538636993009049310363619763878039"),
						array("62184073572399794223406235393808339651327408011116"),
						array("66627891981488087797941876876144230030984490851411"),
						array("60661826293682836764744779239180335110989069790714"),
						array("85786944089552990653640447425576083659976645795096"),
						array("66024396409905389607120198219976047599490197230297"),
						array("64913982680032973156037120041377903785566085089252"),
						array("16730939319872750275468906903707539413042652315011"),
						array("94809377245048795150954100921645863754710598436791"),
						array("78639167021187492431995700641917969777599028300699"),
						array("15368713711936614952811305876380278410754449733078"),
						array("40789923115535562561142322423255033685442488917353"),
						array("44889911501440648020369068063960672322193204149535"),
						array("41503128880339536053299340368006977710650566631954"),
						array("81234880673210146739058568557934581403627822703280"),
						array("82616570773948327592232845941706525094512325230608"),
						array("22918802058777319719839450180888072429661980811197"),
						array("77158542502016545090413245809786882778948721859617"),
						array("72107838435069186155435662884062257473692284509516"),
						array("20849603980134001723930671666823555245252804609722"),
						array("53503534226472524250874054075591789781264330331690")
						);
	
	for($i = 0; $i < count($fiftyDigits); $i++ ){
		$total += $fiftyDigits[$i][0];
		echo $fiftyDigits[$i][0] . "<br>";
	}
	echo "<br><br>" . $total;
}

//OP 14 Collatz
function collatz(){
	
	echo 	"The following iterative sequence is defined for the set of positive integers:<br>" . 
			"n → n/2 (n is even)<br>" . 
			"n → 3n + 1 (n is odd)<br>" .
			"Using the rule above and starting with 13, we generate the following sequence:<br>" .
			"13 → 40 → 20 → 10 → 5 → 16 → 8 → 4 → 2 → 1<br>" .
			"It can be seen that this sequence (starting at 13 and finishing at 1) contains 10 terms. Although it has not been proved yet (Collatz Problem), it is thought that all starting numbers finish at 1." .
			"Which starting number, under one million, produces the longest chain?<br>" . 
			"NOTE: Once the chain starts the terms are allowed to go above one million.<br><br>";
	
	ini_set('memory_limit', '256M'); 
	
	$array = array();
	for($i = 999999; $i > 0; $i--){
		$terms = 1;
		$c = $i;
		
		while($c > 1){
			if($c %2 == 0){
				$c = $c / 2;
				$terms++;
			}
			elseif($c == 1){
				$terms++;
			}
			else{
				$c = ($c * 3) + 1;
				$terms++;
			}
			
		}
		$array[] = $terms;
		if($terms > 500){
			echo $i . ": " . $terms . " terms<br>";
		}
	}		
	echo $i . ": " . max($array);
}
		
		//OP 15 Lattice Paths
		// function latticePaths(){
			// $grid = array(
				// $row1 = array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
				// $row2 = array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
				// $row3 = array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
				// $row4 = array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
				// $row5 = array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
				// $row6 = array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
				// $row7 = array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
				// $row8 = array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
				// $row9 = array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
				// $row10 = array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
				// $row11 = array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
				// $row12 = array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
				// $row13 = array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
				// $row14 = array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
				// $row15 = array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
				// $row16 = array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
				// $row17 = array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
				// $row18 = array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
				// $row19 = array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
				// $row20 = array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1)
				
				// );
				
						
			
			// $cell = 0;
			// $row = 0;
			
			// while(next($grid[$row][$cell]) !== 0 || $grid[$row][$cell] !== $grid[$row][19]){
				
			// zolang het niet de laatste index is of de index niet op 0 is gezet
			// while($cell !== 19 || $grid[$row][$cell] !== 0){
				// $cell++;
			// }
			// Als index
			// $grid[$row][$cell] == 0;
			// $n++;
		// }		
		
		// latticePaths();
		
// OP16 Power Digit Sum
function powerDigitSum()
{
	
	echo 	"2^15 = 32768 and the sum of its digits is 3 + 2 + 7 + 6 + 8 = 26.<br>" .
			"What is the sum of the digits of the number 2^1000?<br><br>";
	
	$pow = gmp_pow(2, 1000);
	echo $pow . "<br>";
	
	$array = str_split($pow, 1);
	
	echo array_sum($array);
}
		
		//OP 17 Number Letter Counts
		function nlc(){
			
			$characters;
			$f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
			$array = array();
			
			for($i = 1; $i < 1001; $i++){
				
				$spelled = $f->format($i);
				$array[] = $spelled;
			}
				
			$newstring1 = implode("",$array);
			
			$newstring2 = str_replace("-","",$newstring1);
			$newstring3 = str_replace(" ","",$newstring2);
			echo $newstring3;
			echo "<br>" . strlen($newstring3);
			
			//calculate amount of 'and's (3 letters) from 101 to 999
			$and = 0;
			
			for($i = 101; $i < 1000; $i++)
			{
				//100s have no and, so skip those
				if(	$i !== 200 && $i !== 300 && $i !== 400 && $i !== 500 && $i !== 600 
					&& $i !== 700 && $i !== 800 && $i !== 900 )
					{
						$and += 3;
						echo "<br>Number " . $i . ": " . $and;
					}
			}
			echo "<br>and: " . $and;
			echo "<br>Total: " . (strlen($newstring3) + $and);
		}
		// nlc();
		
		//OP 18 Maximum Path Sum I
		// function mpsi(){
			
			// $numbers = "75
 // 95 64
 // 17 47 82
 // 18 35 87 10
 // 20 04 82 47 65
 // 19 01 23 75 03 34
 // 88 02 77 73 07 63 67
 // 99 65 04 28 06 16 70 92
 // 41 41 26 56 83 40 80 70 33
 // 41 48 72 33 47 32 37 16 94 29
 // 53 71 44 65 25 43 91 52 97 51 14
 // 70 11 33 28 77 73 17 78 39 68 17 57
 // 91 71 52 38 17 14 91 43 58 50 27 29 48
 // 63 66 04 68 89 53 67 30 73 16 69 87 40 31
 // 04 62 98 27 23 09 70 98 73 93 38 53 60 04 23";
			// $array = explode(" ", $numbers);
			// print_r($array);
			
			// for($i = 0; $i < count($array); $i++){
				// $n = 1;
					// $output = array_slice($array, $i, $n);
					// max($output);
					// $n++;
			// }
		// }
		// mpsi();
		
//OP19
function countingSundays()
{
	echo 	"You are given the following information, but you may prefer to do some research for yourself.<br>" .
			"1 Jan 1900 was a Monday.<br>" .
			"Thirty days has September, April, June and November.<br>" .
			"All the rest have thirty-one,<br>" .
			"Saving February alone,<br>" .
			"Which has twenty-eight, rain or shine.<br>" .
			"And on leap years, twenty-nine.<br>" .
			"A leap year occurs on any year evenly divisible by 4, but not on a century unless it is divisible by 400.<br>" .
			"How many Sundays fell on the first of the month during the twentieth century (1 Jan 1901 to 31 Dec 2000)?<br><br>";
	
	echo "CTRL-F 'sun 1 ' gives 173 results :) Minus the two first of the month Sundays in 1900, the total is 171 Sundays";
	
	$month = array(	"JANUARY" => 31,
					"FEBRUARY" => 28,
					"MARCH" => 31,
					"APRIL" => 30,
					"MAY" => 31,
					"JUNE" => 30,
					"JULY" => 31,
					"AUGUST" => 31,
					"SEPTEMBER" => 30,
					"OCTOBER" => 31,
					"NOVEMBER" => 30,
					"DECEMBER" => 31 );
	$seven = 0;
	$weekDays = array("Mon ", "Tue ", "Wed ", "Thu ", "Fri ", "Sat ", "Sun ", );
	
	//add years and echo
	for($year = 1900; $year < 2001; $year++)
	{
		echo "<br><br><br>YEAR: " . $year;
		
		//calculate if leap year
		if($year %4 == 0 && $year !== 1900)
		{
			$leap = array("FEBRUARY" => 29);
			$month = array_replace($month, $leap);
		}
		else
		{
			$leap = array("FEBRUARY" => 28);
			$month = array_replace($month, $leap);
		}
		
		//add months and echo
		foreach($month as $key => $value)
		{
			echo "<br><br>[" . $key . "]<br>";
			
			//add days and echo
			for($i = 1; $i <= $value; $i++)
			{		
				echo $weekDays[$seven];
				$seven++;
				echo $i . " | ";	
				
				//break line on Sundays
				if($seven == 7)
				{
					echo "<br>";
					$seven = 0;
				}
			}
		}
	}	
}

//OP 20
function factorialDigitSum($input)
{
	echo 	"n! means n × (n − 1) × ... × 3 × 2 × 1<br>" .
			"For example, 10! = 10 × 9 × ... × 3 × 2 × 1 = 3628800,<br>" .
			"and the sum of the digits in the number 10! is 3 + 6 + 2 + 8 + 8 + 0 + 0 = 27.<br>" .
			"Find the sum of the digits in the number 100!<br><br>";
	
	//get factorial of given number (100)
	$fact = gmp_fact($input);
	echo "Factorial !" . $input . ": " . gmp_fact($input);
	
	//split all characters in string
	$array = str_split($fact);
	//get the sum of all elements in the array
	echo "<br><br>Sum: " . array_sum($array);	
}

//OP21
function nameScores()
{
	echo 	"Using names.txt (right click and 'Save Link/Target As...'), a 46K text file containing over five-thousand first names,<br>" .  
			"begin by sorting it into alphabetical order. Then working out the alphabetical value for each name, multiply this value<br>" . 
			"by its alphabetical position in the list to obtain a name score.<br><br>" . 
			"For example, when the list is sorted into alphabetical order, COLIN, which is worth 3 + 15 + 12 + 9 + 14 = 53,<br>" .  
			"is the 938th name in the list. So, COLIN would obtain a score of 938 × 53 = 49714.<br><br>" . 
			"What is the total of all the name scores in the file?<br><br>";
	
	//get content from text file
	$file = file_get_contents("C:\Users\M\Desktop\p022_names.txt");

	//explode String into array of names using ',' as delimiter
	$nameArray = explode(",", $file);
	//sort the array
	sort($nameArray);
	//remove quotes from the names
	$nameArray = str_replace('"', '', $nameArray);
	
	//make an array containing all letters in the alphabet
	$letters = str_split("ABCDEFGHIJKLMNOPQRSTUVWXYZ");
	
	//make an array of numbes 1 - 26 
	$numbers = array();	
	for($i = 0; $i < count($letters); $i++)
	{
		$numbers[$i] = $i + 1;
	}
	//combine the above array assigning the values 1-26 to the keys A-Z
	$letterScore = array_combine($letters, $numbers);
		
	//echo out the names
	foreach($nameArray as $key => $val)
	{
		// echo "nameArray[" . ($key + 1) . "] = " . $val . "<br>";
	}
	
	//total score
	$totalScore = 0;
	
	//for each name
	for($i = 0; $i < count($nameArray); $i++)
	{
		//score per name 
		$nameScore = 0;

		//split out the name into letters
		$nameLetters = str_split($nameArray[$i]);
		
		//and get the scores 
		foreach($nameLetters as $key)
		{
			foreach($letterScore as $let => $val)
			{
				if($key == $let)
				{
					$nameScore += $val;
					// echo "Namescore: " . $nameScore . "<br>";
				}
			}
		}
		$nameScore *= ($i + 1);
		echo "Score for " . $nameArray[$i] . " is " . $nameScore . " (multiplier is " . ($i+1) .")<br>";
		// print_r($nameLetters) . "<br>";
		
		$totalScore += $nameScore;
	}
	
	echo "<br>Total Score is: " . $totalScore;
}

//OP 22
function nonAbundantSums()
{
	echo 	"A perfect number is a number for which the sum of its proper divisors is exactly equal to the number." .
			"For example, <br>the sum of the proper divisors of 28 would be 1 + 2 + 4 + 7 + 14 = 28," .
			"which means that 28 is a perfect number.<br><br> A number n is called deficient if the sum of its proper divisors" .
			"is less than n and it is called abundant if this sum <br>exceeds n.<br><br>" .
			"As 12 is the smallest abundant number, 1 + 2 + 3 + 4 + 6 = 16, the smallest number that can be written as the sum <br>" .
			"of two abundant numbers is 24. By mathematical analysis, it can be shown that all integers greater than 28123 " .
			"can <br>be written as the sum of two abundant numbers. However, this upper limit cannot be reduced any further by analysis" . 
			"even though it is known that the greatest number that cannot be expressed as the sum of two abundant numbers is<br> less than" . 
			" this limit.<br><br>Find the sum of all the positive integers which cannot be written as the sum of two abundant numbers.<br><br>";
	
	ini_set('memory_limit','3072M');
	ini_set('max_execution_time', 20000);
	
	$abundantArray = array();
	$sumAbundantArray = array();
	
	//get all abundant numbers up to 28123
	for($i = 1; $i < 28124; $i++)
	{
		//get the divisors of the current number
		$n = $i;
		$sum = 0;
		while($n > 0)
		{
			//if its a divisor add it to the sum
			if($i %$n == 0 && $i !== $n)
			{
				$sum += $n;
			}
			$n--;
		}
		//put all abundant numbers in an array
		if($sum > $i)
		{
			$abundantArray[] = $i;
		}
	}
	foreach($abundantArray as $value => $key)
	{
		echo $value . ": " . $key . "<br>";
	}
	
	//get all possible combinations of the sum of two abundant numbers 
	for($i = 0; $i < count($abundantArray); $i++)
	{
		for($n = 0; $n < count($abundantArray); $n++)
		{	
			$sum = $abundantArray[$i] + $abundantArray[$n];
			echo "Sum: " . $sum . " (" . $abundantArray[$i] . " + " . $abundantArray[$n] . ")<br>";
			$sumAbundantArray[] = $sum;
		}
		echo "<br><br>";
	}
	
	//sum of all positive integers that aren't the sum of two abundant numbers
	$sumPositive = 0;	
	
	for($i = 1; $i < 38124; $i++)
	{
		if(!in_array($i, $sumAbundantArray))
		{
			echo "Positive Integer: " . $i . "<br>";
			$sumPositive += $i;
		}
	}
	echo "<br>Sum of all the positive integers which cannot be written as the sum of two abundant numbers: " . $sumPositive;
}

//OP 23 Lexicographic permutations
function lexicographicPermutations()
{
	$array = array();
	
	for($i = 123456789; $i < 9876543211; $i++)
	{
		$str = (int)$i;
		if(	strpos($str, "0") && strpos($str, "1") && strpos($str, "2") && strpos($str, "3") && strpos($str, "4") && 
			strpos($str, "5") && strpos($str, "6") && strpos($str, "7") && strpos($str, "8") && strpos($str, "9") && )
		{
			echo $str . "<br>";
		}
	}
}
?>

</p>














