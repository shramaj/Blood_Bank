<?php
require('fpdf181/fpdf.php');
$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$bloodgrp=$_POST['b_grp'];

$pdf=new FPDF();
$pdfd->AddPage();


$pdf->SetFont("Arial","B",16);
$pdf->Cell(10,10,"welcome",0,1,C);
$pdf->output();

?>
