<?php

$con = new MongoClient();
$db = $con->bloodbank; //select Database
$collection = $db->user; 
 
$result = $collection->find();
 
require("fpdf/fpdf.php");
$pdf=new FPDF();
$pdf->Addpage();
$pdf->Image('images/logo.jpg',5,5,-300);
$pdf->SetFont("Arial","B",20);
$pdf->Cell(180,10,"DONORS",0,1,C);
$pdf->Ln(5);
$pdf->SetFont("Times","B",12);
$pdf->Cell(25,10,"Firstname",1,0,C);
$pdf->Cell(25,10,"Lastname",1,0,C);
$pdf->Cell(10,10,"Age",1,0,C);
$pdf->Cell(20,10,"Gender",1,0,C);
 
$pdf->Cell(60,10,"Email",1,0,C);
$pdf->Cell(25,10,"Mobile",1,0,C);
$pdf->Cell(25,10,"Blood-group",1,1,C);
$pdf->SetFont("Times","",12);
 foreach($result as $doc)
{
$pdf->Cell(25,10,$doc['firstname'],1,0,C);
$pdf->Cell(25,10,$doc['lastname'],1,0,C);
$pdf->Cell(10,10,$doc['age'],1,0,C);
$pdf->Cell(20,10,$doc['gender'],1,0,C);
 
$pdf->Cell(60,10,$doc['email'],1,0,C);
$pdf->Cell(25,10,$doc['mobile'],1,0,C);
$pdf->Cell(25,10,$doc['b_grp'],1,1,C);
}
 
$pdf->SetY(-31);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(0,10,"Copyright 2015-2016.Enjoy the joy of giving! All rights reserved.",0,0,'C');
$pdf->output();

?>
