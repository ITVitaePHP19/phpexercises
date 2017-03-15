<?php
	if(session_start() !== null)
	{
		session_start();
	}
	require('fpdf.php');
	
	ob_end_clean(); // the buffer and never prints or returns anything.
	ob_start(); // it starts buffering
	$pdf = new FPDF('Landscape','mm','A4');
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',7);
	$pdf->Cell(35,10, "Studieonderdeel");
	$pdf->Cell(35,10, "Begindatum");
	$pdf->Cell(35,10, "Einddatum");
	$pdf->Cell(35,10, "Tijd Besteed");
	$pdf->Cell(35,10, "% Voltooid");
	$pdf->Cell(35,10, "Moeilijkheid");
	$pdf->Cell(35,10, "Plezier");
	$pdf->Cell(35,10, "Notities");
	
	$fid = $_SESSION["formid"];
	$email = $_SESSION["email"];
	
	$dbc = mysqli_connect("localhost", "root", "", "php19") or die("Error connecting to MYSQL server");				
		
	$sqlDisplay = "SELECT task, date_start, date_end, hours, percentage_complete, difficulty, fun_factor, notes FROM activity WHERE form_id='$fid'";
	
	$resultDisplay = mysqli_query($dbc, $sqlDisplay) or die("<br><br>Error querying the database");
	
	while($row = $resultDisplay->fetch_assoc())
	{
		foreach($resultDisplay as $row)
		{
			$pdf->SetFont('Arial','',7);
			$pdf->Ln();
			
			foreach($row as $column)
			{
				$pdf->Cell(35,10, $column);
			}
		}
	}
	ob_end_flush();
	
	$sqlName = "SELECT name, lastname FROM userregistration WHERE mail='$email'";
	
	$resultName = mysqli_query($dbc, $sqlName) or die("<br><br>Error querying the database");
	while($row = $resultName->fetch_assoc())
	{
		$name = $row["name"] . $row["lastname"];
		$pdf->Output('D','activiteiten' . $name . '.pdf');
	}
?>