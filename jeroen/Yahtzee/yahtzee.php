<! doctype html>
<html>
<head>
	<title>Yahtzee</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php include 'code.php'; ?>


<div id="flex-container">
	<div class="card">
		<div class="card-header">Gooi</div>
		<div class="card-content">
		<form method="post" name="dice">
		<div id="dice_container">
			<div class="dicebox">
				<div class="dice">
					<?php echo $dice1; ?>
				</div>
				<input type="hidden" name="dice1" value="<?php echo $dice1;?>">
				<input type="checkbox" name="check1" <?php echo $disable_check." ".$checked1; ?>>
			</div>

			<div class="dicebox">
				<div class="dice">
					<?php echo $dice2; ?>
				</div>
				<input type="hidden" name="dice2" value="<?php echo $dice2;?>">
				<input type="checkbox" name="check2" <?php echo $disable_check." ".$checked2; ?>>
			</div>

			<div class="dicebox">
				<div class="dice">
					<?php echo $dice3; ?>
				</div>
				<input type="hidden" name="dice3" value="<?php echo $dice3;?>">
				<input type="checkbox" name="check3" <?php echo $disable_check." ".$checked3; ?>>
			</div>

			<div class="dicebox">
				<div class="dice">
					<?php echo $dice4; ?>
				</div>
				<input type="hidden" name="dice4" value="<?php echo $dice4;?>">
				<input type="checkbox" name="check4" <?php echo $disable_check." ".$checked4; ?>>
			</div>

			<div class="dicebox">
				<div class="dice">
					<?php echo $dice5; ?>
				</div>
				<input type="hidden" name="dice5" value="<?php echo $dice5;?>">
				<input type="checkbox" name="check5" <?php echo $disable_check." ".$checked5; ?>>
			</div>
		</div>
		<button name="roll" <?php echo $disable_roll; ?>>Gooi</button>
		<p><?php echo $message.$end_message.$fill_in_message ?>
		</div>
	</div>



	<div class = "card">
		<div class="card-header">Score</div>
		<div class="card-content">
			<table>
				<th></th>
				<th>Bovenste helft</th>
				<th></th>
				<th>Score</th>
			</tr>
				<td><input type="radio" name="choice" value="aces" <?php echo $aces_disable; ?>></td>
				<td>enen</td>
				<td>som van alle enen</td>
				<td><?php echo $_SESSION['aces'];?></td>
			</tr>
				<td><input type="radio" name="choice" value="twos" <?php echo $twos_disable; ?>></td>
				<td>tweeën</td>
				<td>som van alle tweeën</td>
				<td><?php echo $_SESSION['twos'];?></td>
			</tr>
				<td><input type="radio" name="choice" value="threes" <?php echo $threes_disable; ?>></td>
				<td>drieën</td>
				<td>som van alle drieën</td>
				<td><?php echo $_SESSION['threes'];?></td>
			</tr>
				<td><input type="radio" name="choice" value="fours" <?php echo $fours_disable; ?>></td>
				<td>vieren</td>
				<td>som van alle vieren</td>
				<td><?php echo $_SESSION['fours'];?></td>
			</tr>
				<td><input type="radio" name="choice" value="fives" <?php echo $fives_disable; ?>></td>
				<td>vijven</td>
				<td>som van alle vijven</td>
				<td><?php echo $_SESSION['fives'];?></td>
			</tr>
				<td><input type="radio" name="choice" value="sixes" <?php echo $sixes_disable; ?>></td>
				<td>zessen</td>
				<td>som van alle zessen</td>
				<td><?php echo $_SESSION['sixes'];?></td>
			</tr>
				<th></th>
				<th>Onderste helft</th>
			</tr>
				<td><input type="radio" name="choice" value="3_kind" <?php echo $toak_disable; ?>></td>
				<td>Three of a kind</td>
				<td>waarde van alle stenen, met 3 dezelfde</td>
				<td><?php echo $_SESSION['toak'];?></td>
			</tr>
				<td><input type="radio" name="choice" value="carre" <?php echo $carre_disable; ?>></td>
				<td>Carré</td>
				<td>waarde van alle stenen, met 4 dezelfde</td>
				<td><?php echo $_SESSION['carre'];?></td>
			</tr>
				<td><input type="radio" name="choice" value="fh" <?php echo $fh_disable; ?>></td>
				<td>Full House</td>
				<td>waarde van alle stenen, met 2 dezelfde + 3 dezelfde</td>
				<td><?php echo $_SESSION['fh'];?></td>
			</tr>
				<td><input type="radio" name="choice" value="ss" <?php echo $ss_disable; ?>></td>
				<td>Kleine straat</td>
				<td>30pt (bij 4 opeenvolgende waarden)</td>
				<td><?php echo $_SESSION['ss'];?></td>
			</tr>
				<td><input type="radio" name="choice" value="ls" <?php echo $ls_disable; ?>></td>
				<td>Grote straat</td>
				<td>40pt (bij 5 opeenvolgende waarden)</td>
				<td><?php echo $_SESSION['ls'];?></td>
			</tr>
				<td><input type="radio" name="choice" value="yahtzee" <?php echo $yahtzee_disable; ?>></td>
				<td>Yahtzee</td>
				<td>50pt (bij 5 dezelfde waarden)</td>
				<td><?php echo $_SESSION['yahtzee'];?></td>
			</tr>
				<td><input type="radio" name="choice" value="chance" <?php echo $chance_disable; ?>></td>
				<td>Chance</td>
				<td>som van alle stenen</td>
				<td><?php echo $_SESSION['chance'];?></td>
			</tr>
				<td><input type="radio" name="choice" value="YB" <?php echo $yb_disable; ?>></td>
				<td>Yahtzee bonus</td>
				<td>100 pt per Yahtzee na de eerste</td>
				<td><?php echo $_SESSION['yb'];?></td>
			</tr>
				</tr>
				<th></th>
				<th>Totaal</th>
			</tr>
				<td></td>
				<td>Totaal bovenste helft</td>
				<td>Als totaal hoger is dan 63, +35pt</td>
				<td><?php echo $_SESSION['total_us'] ; ?></td>
			</tr>
				<td></td>
				<td>Totaal onderste helft</td>
				<td></td>
				<td><?php echo $_SESSION['total_ls'] ; ?></td>
			</tr>
				<td></td>
				<td>Totaal</td>
				<td></td>
				<td><b><?php echo $_SESSION['total'] ; ?></b></td>
			</tr>
			</table>
			<button type="submit" name="submit"  <?php echo $disable_submit; ?> >Vul in</button>
			<button id="reset" type="submit" name="reset">Nieuw spel</button>
			<?php if($err_message != "") echo "<p>".$err_message."</p>"; ?>
		</div>
	</div>
</div>

</form>

</body>
</html>