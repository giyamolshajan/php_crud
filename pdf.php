<?php
include('connection.php');
require('fpdf184/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(10,10,'No',1,0,'C');
$pdf->Cell(60,10,'FirstName',1,0,'C');
$pdf->Cell(60,10,'LastName',1,0,'C');
$pdf->Cell(30,10,'Mark',1,1,'C');
// for($i=1;$i<=15;$i++){
// $pdf->Cell(10,10,$i,1,0,'C');
// $pdf->Cell(60,10,'abc',1,0,'C');
// $pdf->Cell(60,10,'def',1,0,'C');
// $pdf->Cell(30,10,'40',1,1,'C');
// }
$sqlquery="SELECT * FROM tbl_stud";
$res=mysqli_query($conn,$sqlquery);
if($res->num_rows > 0){
 $i=0;
while($row=mysqli_fetch_assoc($res)) {
  $i++;
$pdf->Cell(10,10,$i,1,0,'C');
$pdf->Cell(60,10,$row['fname'],1,0,'C');
$pdf->Cell(60,10,$row['lname'],1,0,'C');
$pdf->Cell(30,10,$row['mark'],1,1,'C');
}
}
else{
  echo "records not found";
}
$pdf->Output();

?>
