<?php
include('model.php');
session_start();
$user = $db->User;
$order_no = $db->order_no;
$orders = $order_no->findOne();
  $fooditems = $db->fooditems;
$tmporders = $db->tmporders;
$currentorders = $tmporders->findOne(array('order_no' => $orders['no']));
if (!empty($_POST['pdf']))
{

require("fpdf/fpdf.php");
$pdf=new FPDF();
$pdf->Addpage();	
$pdf->Image('logo.png',90,6,30);
$pdf->Ln(15);

$pdf->SetFont("Arial","B",20);
$pdf->SetTextColor(204,41,0);
$pdf->Cell(0,10,"Profile Information",1,1,C);

$pdf->SetFont("Times","B",10);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(190,10,"Name: ".$_SESSION['username'],1,1);
//$pdf->Cell(95,10,$_SESSION['username'],0,0);
$pdf->Cell(190,10,"Contact: ".$_SESSION['mobile'],1,1);
$pdf->Cell(190,10,"Email: ".$_SESSION['email'],1,1);
$pdf->Cell(190,10,"Address: ".$_SESSION['address'],1,1);
$pdf->Ln(15);

$pdf->SetFont("Arial","B",20);
$pdf->SetTextColor(204,41,0);
$pdf->Cell(0,10,"Order Details",1,1,C);

$pdf->SetFont("Times","B",10);
$pdf->SetTextColor(0,0,0);
$date1 = date("d.m.y");
$time1 = date("H:i:s");
$pdf->Cell(63,10,"Order Date: ".$date1,1,0);
$pdf->Cell(63,10,"Order Time: ".$time1,1,0);
$pdf->Cell(64,10,"Order No: ".$orders['no'],1,1);
$pdf->Ln(15);

$pdf->SetFont("Arial","B",20);
$pdf->SetTextColor(204,41,0);
$pdf->Cell(0,10,"Your Order:",1,1,C);

$pdf->SetFont("Arial","B",12);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(150,10,"Product Name",1,0);
$pdf->Cell(20,10,"Quantity",1,0,C);
$pdf->Cell(20,10,"Price",1,1,C);

$total = 0;
//var_dump($currentorders['qty'][0]['dish_id']);
foreach ($currentorders['qty'] as $key) {
                $dish_id = $key['dish_id'];
                $dish = $fooditems->findOne(array('_id' => new MongoId($dish_id)));
               	$total += $dish["dish_cost"] * $key['qty'];
              	$pdf->SetFont("Times","B",10);
				$pdf->SetTextColor(0,0,0);
				$pdf->Cell(150,10,$dish['dish_name'],1,0);
				$pdf->Cell(20,10,$key['qty'],1,0,C);
				$pdf->Cell(20,10,"INR " .$dish['dish_cost']*$key['qty'],1,1,C);
              }

/*$pdf->SetFont("Times","B",10);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(150,10,"Description",1,0);
$pdf->Cell(20,10,"X",1,0,C);
$pdf->Cell(20,10,"INR",1,1,C);*/

$pdf->SetFont("Arial","B",12);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(150,10,"Total Amount: ",1,0,R);
$pdf->Cell(40,10,"INR ".$total,1,1,R);

$pdf->Ln(15);
$pdf->SetFont("Arial","B",20);
$pdf->SetTextColor(204,41,0);
$pdf->Cell(0,10,"To Be Delivered At: ",1,1,C);

$pdf->SetFont("Times","B",10);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(0,20,"Address : ".$_SESSION['address'],1,1);

$pdf->SetY(-31);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(0,10,"Copyright 2015-2016. FooDelight Pvt. Ltd. All rights reserved.",0,0,'C');

$pdf->output();

}

?>