<?php 
require('../mpdf.php');
$mpdf=new mPDF();
$text = file_get_contents('calculator.html');
$mpdf->WriteHTML($text);
$mpdf->Output();
?>