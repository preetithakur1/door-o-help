<?php 
require('../mpdf.php');
$mpdf=new mPDF();



$text = file_get_contents('icard.html');

// $text = preparePreText($text);

// // Default spaces/tab in mPDF is 8 as specified by HTML spec.

// // Notepad and other text editors use a value of 6

// $mpdf->tabSpaces = 6;

// // If 'scriptfile.php' is iso-8859-1 or win-1252 encoded, use

// $mpdf->allow_charset_conversion=true;

// $mpdf->charset_in='windows-1252';

$mpdf->WriteHTML($text);

$mpdf->Output();

exit;

?>

