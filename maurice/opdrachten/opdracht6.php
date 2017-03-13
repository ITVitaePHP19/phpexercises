<article>
	<br>
	<form action="" method="post">
		<table class="midtable">
			<tr>
				<td><img src="img/lilo.jpg" alt="lilo" height="300"></td>
				<td>
					<input type="radio" name="animal" value="monkey"> Monkey<br>
	  				<input type="radio" name="animal" value="bear"> Bear<br>
	  				<input type="radio" name="animal" value="human"> Human<br>
	  				<input type="radio" name="animal" value="dog"> Dog<br>
	  				<input type="radio" name="animal" value="Gerbil"> Gerbil<br>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Answer">
				</td>
			</tr>
		</table>		
	</form>
		
	<?php
	
		//Guess the right picture quiz
		class pictureQuiz
		{
			private $answer;
			
			//checks whether your chosen answer is right
			function question()
			{
				$this->answer = $_POST["animal"];
				
				if($this->answer == 'dog')
				{
					echo "Correct!";
				}
				else
				{
					echo "Close Enough!";
				}
			}
		}
		$pQ = new pictureQuiz;
	
		if( isset($_POST["submit"]) ) 
		{
			$pQ->question();
		}	
	?>
</article>