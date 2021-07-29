<?php
ini_set('display_errors', 'off');
error_reporting(E_ALL | E_STRICT);
// if(!empty($_GET['submit']))
// if(!empty($_REQUEST['submit']))
if(!empty($_POST['submit']))
{
    // ob_start();
    $name = $_POST['proname'];
    $cost = $_POST['procost'];
    $gstno = $_POST['progst'];
    $date = $_POST['prodate'];
    $gst = $_POST['progcost'];
    $total = $_POST['protcost'];
    $del = $_POST['prodel'];
    $add = $_POST['proadd'];
    // $name=isset($_POST['proname'])?$_post['proname']:"";
    // $name = $_GET['name'];
    // $cost = $_GET['cost'];
    // $gstno = $_GET['gst'];
    // $date = $_GET['date'];
    // $gst = $_GET['gcost'];
    // $total = $_GET['tcost'];
    // echo $total;
    // $name = $_REQUEST['proname'];
    // $cost = $_REQUEST['procost'];
    // $gstno = $_REQUEST['progst'];
    // $date = $_REQUEST['prodate'];
    // $gst = $_REQUEST['progcost'];
    // $total = $_REQUEST['protcost'];
    require("fpdf/fpdf.php");
    $pdf = new FPDF();
    $pdf->AddPage();          
    $pdf->SetFont('Arial','',8);   
    $pdf->Cell(0,7,'TAX INVOICE',0,1,'C'); 
    $pdf->SetFont('Arial','B',22);
    $pdf->Cell(0,16,'----->  # Shivangi Enterprises #  <-----',1,1,'C');
    $pdf->SetFont('Arial','',10);
    $pdf->Ln(3);
    $pdf->Cell(0,7,'217 abc-XYZ Nagar, Udaipur',0,1,'C');
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(0,7,'Contact Us at : shivangi009shivi@gmail.com',0,1,'C');
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(0,7,'Product Bill Recipt GST',0,1,'C');
    $pdf->SetFont('Arial','',10);
    $pdf->Ln(3);
    $pdf->Cell(100,7,'GST Number : ',1,0,'C');
    $pdf->Cell(0,7,$gstno,1,1,'C');
    $pdf->Ln(3);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(60,7,'Bill to:',1,0);
    $pdf->Cell(60,7,'Place of Supply:',1,0);
    $pdf->Cell(35,7,'Invoice No.:',1,0);
    $pdf->Cell(0,7,'Dated:',1,1);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(60,14,$del,1,0);
    $pdf->Cell(60,14,$add,1,0);
    $pdf->Cell(35,14,'63-93-944',1,0);
    $pdf->Cell(0,14,$date,1,1);
    // product
    $pdf->Ln(3);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(60,7,'Product Name',1,0,'C');
    $pdf->Cell(15,7,'Price',1,0,'C');
    $pdf->Cell(25,7,'Date',1,0,'C');
    $pdf->Cell(20,7,'GST No.',1,0,'C');
    $pdf->Cell(35,7,'GST Tax (18%)',1,0,'C');
    $pdf->Cell(0,7,'Total Price',1,1,'C');
    // details/data
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(60,75,$name,1,0,'C');
    $pdf->Cell(15,75,$cost,1,0,'C');
    $pdf->Cell(25,75,$date,1,0,'C');
    $pdf->Cell(20,75,$gstno,1,0,'C');
    $pdf->Cell(35,75,$gst,1,0,'C');
    $pdf->Cell(0,75,$total,1,0,'C');
    $pdf->output();
}
?>
