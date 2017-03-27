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
					<?= $dice1; ?>
				</div>
				<input type="hidden" name="dice1" value="<?= $dice1;?>">
				<input type="checkbox" name="check1" <?= $disable_check." ".$checked1; ?>>
			</div>

			<div class="dicebox">
				<div class="dice">
					<?= $dice2; ?>
				</div>
				<input type="hidden" name="dice2" value="<?= $dice2;?>">
				<input type="checkbox" name="check2" <?= $disable_check." ".$checked2; ?>>
			</div>

			<div class="dicebox">
				<div class="dice">
					<?= $dice3; ?>
				</div>
				<input type="hidden" name="dice3" value="<?= $dice3;?>">
				<input type="checkbox" name="check3" <?= $disable_check." ".$checked3; ?>>
			</div>

			<div class="dicebox">
				<div class="dice">
					<?= $dice4; ?>
				</div>
				<input type="hidden" name="dice4" value="<?= $dice4;?>">
				<input type="checkbox" name="check4" <?= $disable_check." ".$checked4; ?>>
			</div>

			<div class="dicebox">
				<div class="dice">
					<?= $dice5; ?>
				</div>
				<input type="hidden" name="dice5" value="<?= $dice5;?>">
				<input type="checkbox" name="check5" <?= $disable_check." ".$checked5; ?>>
			</div>
		</div>
		<button name="roll" <?= $disable_roll; ?>>Gooi</button>
		<p><?= $message.$end_message.$fill_in_message ?>
		</div>
	</div>



	<div class = "card">
		<div class="card-header">Score</div>
		<div class="card-content">
			<table>
				<th colspan="3">Bovenste helft</th>
				<th>Score</th>
			</tr>
				<td><input type="radio" name="choice" value="aces" <?= $aces_disable; ?>></td>
				<td>enen</td>
				<td>som van alle enen</td>
				<td><?= $_SESSION['aces'];?></td>
			</tr>
				<td><input type="radio" name="choice" value="twos" <?= $twos_disable; ?>></td>
				<td>tweeën</td>
				<td>som van alle tweeën</td>
				<td><?php echo $_SESSION['twos'];?></td>
			</tr>
				<td><input type="radio" name="choice" value="threes" <?= $threes_disable; ?>></td>
				<td>drieën</td>
				<td>som van alle drieën</td>
				<td><?= $_SESSION['threes'];?></td>
			</tr>
				<td><input type="radio" name="choice" value="fours" <?= $fours_disable; ?>></td>
				<td>vieren</td>
				<td>som van alle vieren</td>
				<td><?= $_SESSION['fours'];?></td>
			</tr>
				<td><input type="radio" name="choice" value="fives" <?= $fives_disable; ?>></td>
				<td>vijven</td>
				<td>som van alle vijven</td>
				<td><?= $_SESSION['fives'];?></td>
			</tr>
				<td><input type="radio" name="choice" value="sixes" <?= $sixes_disable; ?>></td>
				<td>zessen</td>
				<td>som van alle zessen</td>
				<td><?= $_SESSION['sixes'];?></td>
			</tr>
				<th colspan="4">Onderste helft</th>
			</tr>
				<td><input type="radio" name="choice" value="3_kind" <?= $toak_disable; ?>></td>
				<td>Three of a kind</td>
				<td>waarde van alle stenen, met 3 dezelfde</td>
				<td><?= $_SESSION['toak'];?></td>
			</tr>
				<td><input type="radio" name="choice" value="carre" <?= $carre_disable; ?>></td>
				<td>Carré</td>
				<td>waarde van alle stenen, met 4 dezelfde</td>
				<td><?= $_SESSION['carre'];?></td>
			</tr>
				<td><input type="radio" name="choice" value="fh" <?= $fh_disable; ?>></td>
				<td>Full House</td>
				<td>25 punten bij 2 dezelfde + 3 dezelfde stenen</td>
				<td><?= $_SESSION['fh'];?></td>
			</tr>
				<td><input type="radio" name="choice" value="ss" <?= $ss_disable; ?>></td>
				<td>Kleine straat</td>
				<td>30pt (bij 4 opeenvolgende waarden)</td>
				<td><?= $_SESSION['ss'];?></td>
			</tr>
				<td><input type="radio" name="choice" value="ls" <?= $ls_disable; ?>></td>
				<td>Grote straat</td>
				<td>40pt (bij 5 opeenvolgende waarden)</td>
				<td><?= $_SESSION['ls'];?></td>
			</tr>
				<td><input type="radio" name="choice" value="yahtzee" <?= $yahtzee_disable; ?>></td>
				<td>Yahtzee</td>
				<td>50pt (bij 5 dezelfde waarden)</td>
				<td><?= $_SESSION['yahtzee'];?></td>
			</tr>
				<td><input type="radio" name="choice" value="chance" <?= $chance_disable; ?>></td>
				<td>Chance</td>
				<td>som van alle stenen</td>
				<td><?= $_SESSION['chance'];?></td>
			</tr>
				<td><input type="radio" name="choice" value="YB" <?= $yb_disable; ?>></td>
				<td>Yahtzee bonus</td>
				<td>100 pt per Yahtzee na de eerste</td>
				<td><?= $_SESSION['yb'];?></td>
			</tr>
				</tr>
				<th colspan="4">Totaal</th>
			</tr>
				<td></td>
				<td>Totaal bovenste helft</td>
				<td>Als totaal hoger is dan 63, +35pt</td>
				<td><?= $_SESSION['total_us'] ; ?></td>
			</tr>
				<td></td>
				<td>Totaal onderste helft</td>
				<td></td>
				<td><?= $_SESSION['total_ls'] ; ?></td>
			</tr>
				<td></td>
				<td>Totaal</td>
				<td></td>
				<td><b><?= $_SESSION['total'] ; ?></b></td>
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
