<?php

if(isset($_POST['submit']))
{
	$col_name=$_POST['college-int'];
	$stud_no=$_POST['stud-no'];
	$app_date=$_POST['app-date'];
	$sname=$_POST['stud-name'];
	$couryrsec=$_POST['crsyrsc'];
	$acad_yr=$_POST['acad-yr'];
	$curr_sem=$_POST['optradio'];
	$reason=$_POST['reason-box'];

	require ('../../assets/fpdf.php');

	$pdf= new FPDF();
	$pdf->AddPage();

	$pdf->SetFont("Arial","B","16");

	//new line
	$pdf->Cell(0,10,"",0,1);

	$pdf->Cell(0,10,"\t \t \t \t \t \t \t \t \t \t 
		\t \t \t \t \t \t \t 
		PERIGRINUS SCHOOL ",0,1);
	$pdf->Cell(0,10,"\t \t \t \t \t \t \t \t \t \t 
		\t \t \t \t \t
		OVERLOAD SUBJECT/S",0,1);

	//new line
	$pdf->Cell(0,10,"",0,1);


	$pdf->Cell(165,10,"\t \t \t \t \t \t \t \t \t \t 
		\t \t \t \t \t \t \t \t \t \t \t \t \t \t \t
		\t \t \t \t \t \t \t
		Application Date: ",0,0);
	$pdf->Cell(25,10,$app_date,0,1);

	$pdf->Cell(50,10,"College/Institute: ",0,0);
	$pdf->Cell(140,10,$col_name,0,1);

	$pdf->Cell(50,10,"Student Number: ",0,0);
	$pdf->Cell(140,10,$stud_no,0,1);

	$pdf->Cell(50,10,"Student Name: ",0,0);
	$pdf->Cell(140,10,$sname,0,1);

	$pdf->Cell(50,10,"Course, Yr-Sec: ",0,0);
	$pdf->Cell(140,10,$couryrsec,0,1);

	$pdf->Cell(45,10,"Academic Year: ",0,0);
	$pdf->Cell(60,10,$acad_yr,0,0);
	$pdf->Cell(52,10,"Current Semester: ",0,0);
	$pdf->Cell(50,10,$curr_sem,0,1);

	$pdf->Cell(50,10,"Reason: ",0,0);
	$pdf->Cell(140,10,$reason,0,1);

	$pdf->Output();
}


?>