<?php
require 'assets/fpdf181/fpdf.php';

$laporan = new FPDF('P','mm','A4');
$laporan->AddPage();

$laporan->SetTextColor(100,100,100);
$laporan->SetFont('Arial','B',16);

$laporan->Cell( 0, 15, '#{SarapanKode}', 0, 0, 'C' );

$laporan->SetFont('Arial','B',16);

$laporan->Write(19, 'Daftar Tugas');
$laporan->Ln(12);
$laporan->SetFont('Arial','',12);
$laporan->Write(12,'Ini adalah daftar rincian tugas untuk bulan Februari tahun 2017 : ');
$laporan->Ln(12);

foreach ($detail as $row) {
	$laporan->SetFont('Arial','B',12);
	$laporan->Write(12,$row['tugas']);
	$laporan->Ln(8);
	$laporan->SetFont('Arial','',12);
	$laporan->Write(12, html_entity_decode(trim(strip_tags($row['deskripsi'])),ENT_QUOTES));
	$laporan->Ln(12);
	$laporan->Write(2,$row['prioritas']);
	$laporan->Ln(8);
	$laporan->Ln(8);
}

$laporan->Ln(12);



$laporan->Output('SarapanKode.pdf','I');


?>