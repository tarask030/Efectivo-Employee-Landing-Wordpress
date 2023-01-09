<?php

include('conf.php');

$dbc = mysqli_connect($v['m_host'],$v['m_user'],$v['m_pass'],$v['m_baza']);
mysqli_query($dbc,'SET NAMES utf8');

$qq = 'SELECT * FROM nursery';
$dbq = mysqli_query($dbc,$qq);

use setasign\Fpdi\Fpdi;

require_once('fpdf/fpdf.php');
require_once('tfpdf/tfpdf.php');
require_once('fpdi/autoload.php');

while($q2 = mysqli_fetch_array($dbq)){

$text = $q2['imienazw'];
$text1 = $q2['email'];  
//setlocale(LC_CTYPE, 'pl_PL');

// initiate FPDI
$pdf = new Fpdi();
// add a page
$pdf->AddPage();	
// set the source file
$pdf->setSourceFile('login-bb.pdf');
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at position 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx, 2, 2, 205);

$login = iconv('UTF-8', 'ISO-8859-2', $text1);
$haslo = iconv('UTF-8', 'ISO-8859-2', $text);
//$txt = $text;
$mid_x = 86;
$mid_xx = 101;
//$txt2 = 'fwef 2f 32 f23 ff 2fdew fsd fsdfsdfsdf sfsd fdsfsdf dsf dsf ds';
//$txt = wordwrap($txt2, 20, "\n");

$pdf->AddFont('DejaVu','','GentiumPlus-I.php');
$pdf->SetFont('DejaVu','',22);

// now write some text above the imported page
//$pdf->SetFont('Arial','I',32);
$pdf->SetTextColor(0, 0, 0);

//$pdf->WordWrap($txt,120);

//$pdf->SetXY(110,110);

$pdf->Text($mid_xx - ($pdf->GetStringWidth($login) / 2), 192, $login);
$pdf->Text($mid_x - ($pdf->GetStringWidth($haslo) / 2), 203, $haslo);
//$pdf->Write($mid_x - ($pdf->GetStringWidth($txt) / 2), $txt);

$pdf->Output('F', 'pdf/'.str_replace('@','_',$q2['email']).'.pdf');

}