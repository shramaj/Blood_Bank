<?php

$con = new MongoClient();
$db = $con->bloodbank; //select Database
$collection = $db->org; 
 
$result = $collection->find();
 
require("fpdf/fpdf.php");
$pdf=new FPDF();
$pdf->Addpage();
$pdf->Image('images/logo.jpg',5,5,-300);
$pdf->SetFont("Arial","B",20);
$pdf->Cell(180,10,"ORGANISED EVENTS",0,1,C);
$pdf->Ln(5);
$pdf->SetFont("Times","B",12);
$pdf->Cell(60,10,"Name",1,0,C);
$pdf->Cell(60,10,"Place",1,0,C);
$pdf->Cell(30,10,"Date",1,0,C);
 
$pdf->Cell(25,10,"No of donors",1,0,C);
$pdf->Cell(25,10,"No of units",1,1,C);
 

$pdf->SetFont("Times","",12);
 foreach($result as $doc)
{
$pdf->Cell(70,10,$doc['events']['cname'],1,0,C);
$pdf->Cell(60,10,$doc['events']['place'],1,0,C);
$pdf->Cell(30,10,$doc['events']['date'],1,0,C);
 $pdf->Cell(25,10,$doc['events']['t_n_d'],1,0,C);
$pdf->Cell(25,10,$doc['events']['no'],1,1,C);
}
 
$pdf->SetY(-31);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(0,10,"Copyright 2015-2016.Enjoy the joy of giving! All rights reserved.",0,0,'C');
$pdf->output();

?>
