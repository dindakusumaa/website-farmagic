<?php
// memanggil library FPDF
require('fpdf185/fpdf.php');
include 'connect.php';
 
// intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
 
$pdf->SetFont('Times','B',13);
$pdf->Cell(200,10,'Fakta Menarik',0,0,'C');
 
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(20,7,'ID FAKTA' ,1,0,'C');
$pdf->Cell(95,7,'JUDUL FAKTA',1,0,'C');
$pdf->Cell(25,7,'KATEGORI',1,0,'C');
$pdf->Cell(35,7,'GAMBAR',1,0,'C');
 
 
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$data = mysqli_query($conn,"SELECT * FROM fakta join kfakta on kfakta.id_kategori = fakta.id_kategori");
while($d = mysqli_fetch_array($data)){
  $pdf->Cell(10,6, $no++,1,0,'C');
  $pdf->Cell(20,6, $d['id_fakta'],1,0);
  $pdf->Cell(95,6, $d['judul'],1,0);  
  $pdf->Cell(25,6, $d['nama_kategori'],1,0);
  $pdf->Cell(35,6, $d['gambar'],1,1);
}
 
$pdf->Output();
 
?>