<!DOCTYPE html>
<html>
<head>
<title>Tic Tac Toe</title>
	
</head>


<body align="center">

<h1>Tic Tac Toe</h1>


	<form method="POST" action="index.php">
	
		<?php
		
		//UNDER CONSTRUCTION
		$error = false; 
		$x_wins = false; 
		$o_wins = false; 
		$count = 0;
		for($id =1; $id <=9; $id++)
		{
			if($id == 4 || $id== 7) print "<br>";
			print "<input name = $id type = text size = 4";
			if(isset($_POST['submit']) && !empty($_POST[$id]))
			{
				
				if($_POST[$id] == "x" || $_POST[$id] == "o")
				{
					$count +=1;
					print " value = ".$_POST[$id]." readonly>";
					//horizontal
					for($a = 1, $b = 2, $c= 3; $a <= 7, $b<= 8, $c <= 9; $a+=3, $b+=3, $c+=3)
					{
						if($_POST["$a"] == $_POST["$b"] && $_POST["$b"] == $_POST["$c"])
						{
							if($_POST["$a"] == "x")
							{
								$x_wins = true;
							}
							elseif($_POST["$a"] == "o") 
							{
								$o_wins = true;
							}
						}
					}
					//vertical
						for($a =1 , $b = 4, $c= 7; $a <= 3, $b<=6, $c <= 9; $a+=1, $b+=1, $c+=1)
						{
							if($_POST["$a"] == $_POST["$b"] && $_POST["$b"] == $_POST["$c"])
							{
							if($_POST[$a] == "x")
							{
								$x_wins = true;
							}
							elseif($_POST["$a"] == "o") 
							{
								$o_wins = true;
							}
						}
						
					}	//diagnol
					for($a =1, $b = 5, $c=9; $a <= 3, $b<= 5, $c >= 7; $a+=2, $b+=0, $c-=2)
					{
						if($_POST["$a"] == $_POST["$b"] && $_POST["$b"] == $_POST["$c"])
						{
							if($_POST["$a"] == "x")
							{
								$x_wins = true;
							}
							elseif($_POST["$a"] == "o") 
							{
								$o_wins = true;
							}
						}
					}
				}
				else
				{
					print ">";
					$error = true;
				}
			}//if there are no more values close the input element
			else
			{
				print ">";
			}
		}
		?>
			<p><input name="submit" type="submit"><p>
		</form>
		<?php
			if($o_wins)
			{
				print "player o wins";
			}
			elseif($error)
			{
				print "Please enter X or O";
			}
			elseif($x_wins)
			{
				print "player x wins";
			}//nog een functie hier toevoegen
			elseif($count == 9 && !$o_wins && !$x_wins)
			{
				print "Draw";
			}
			else
			{
				print "Please enter and x or o";
			}
		?>

</body>
</html>