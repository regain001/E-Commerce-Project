<?php
	require("fpdf/fpdf.php");
    require("db_rw.php");
	
	class PDF extends FPDF
{
	
// Page header
function Header()
{
    // Logo
    $this->Image('bdBlue.png',10,0,30);
	$title="BD Electronics";

    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Calculate width of title and position
    $w = $this->GetStringWidth($title)+6;
    $this->SetX((210-$w)/2);
    // Colors of frame, background and text
    $this->SetDrawColor(0,80,180);
    $this->SetFillColor(230,230,0);
    $this->SetTextColor(220,50,50);
    // Thickness of frame (1 mm)
    $this->SetLineWidth(1);
    // Title
    $this->Cell($w,9,$title,1,1,'C',true);
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}


//for($i=1;$i<=40;$i++)
 //   $pdf->Cell(0,10,'Printing line number '.$i,0,1);
//$pdf->Output();


	if(isset($_COOKIE["u_id"])){

	$query="SELECT a.p_title,a.p_price,a.p_img,b.qty FROM products a,cart b WHERE a.p_id=b.p_id";
	$jsn=getJSONFromDB($query);
	$jd=json_decode($jsn);
	$count=0;
	
	
	// Instanciation of inherited class
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Times','',12);
	// Background color
    $pdf->SetFillColor(255,255,255);
	// Title
    $pdf->Cell(45,6,"Item",1,0,'C',true);
	$pdf->Cell(70,6,"Image",1,0,'C',true);
	$pdf->Cell(30,6,"Quantity",1,0,'C',true);
	$pdf->Cell(45,6,"price (TK)",1,0,'C',true);
    // Line break
    $pdf->Ln(6);
	$balanceSheet=0;
	
	//$pdf->Cell(0,10,'Printing line number ',0,1);	
	foreach($jd as $v){
	
		$title=$v->p_title;
		$i=$v->p_img;
		//$arr=explode("/",$i);
		$img=$i;
		//$img=$v->p_img;
		$price=$v->p_price;
		$quantity=$v->qty;
		$totalPrice=$price*$quantity;
		$balanceSheet+=$totalPrice;
		
		// Background color
		$pdf->SetFillColor(200,220,255);
		// Title
		$pdf->Cell(45,50,"$title",1,0,'C',true);
		// Background color
		//$pdf->SetFillColor(255,255,255);
		$pdf->Cell(70,50,$pdf->Image($img,$pdf->GetX()+2,$pdf->GetY()+2,50,40),1,0,'C',true);
		//$pdf->SetFillColor(200,220,255);
		//$pdf->Image($img,$pdf->GetX()+5,$pdf->GetY()+5,45);
		$pdf->Cell(30,50,"$quantity",1,0,'C',true);
		$pdf->Cell(45,50,"$totalPrice",1,0,'C',true);
		// Line break
		$pdf->Ln(50);
		//$pdf->Image($img,50,60,10);  $pdf->Image($img,$pdf->GetX(),$pdf->GetY(),30)
	   }
	// Arial italic 8
    $pdf->SetFont('Arial','I',12);
	$pdf->SetFillColor(255,255,255);
	$trnxID=rand();
	$pdf->Cell(190,20,"Transaction ID : $trnxID   ||   Total Price : $balanceSheet TK ",1,0,'C',true);
	$pdf->Output();
	
	}
?>