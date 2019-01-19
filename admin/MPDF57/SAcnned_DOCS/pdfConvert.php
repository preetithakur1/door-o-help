<?php 
require('../mpdf.php');
$pdf=new mPDF();
$html='<img src="Davinder/d1.jpg">
<img src="Davinder/d2.jpg">
<img src="Davinder/d3.jpg">
<img src="Davinder/d4.jpg">
<img src="Davinder/d5.jpg">
<img src="Davinder/d6.jpg">
<img src="Davinder/d7.jpg">
<img src="Davinder/d8.jpg">
<img src="Davinder/d9.jpg">
<img src="Davinder/d10.jpg">
<img src="Davinder/d11.jpg">
<img src="Davinder/d12.jpg">
<img src="Davinder/d13.jpg">
<img src="Davinder/d14.jpg">
<img src="Davinder/d15.jpg">
<img src="Davinder/d16.jpg">
<img src="Davinder/d17.jpg">';
$pdf->WriteHTML($html);
$pdf->Output();



 ?>