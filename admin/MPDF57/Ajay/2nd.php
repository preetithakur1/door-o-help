<?php
 $conn=mysqli_connect("localhost","root","linux","PDF_practice");
$query="select * from student";
$exe=mysqli_query($conn,$query);



require('../mpdf.php');
$mpdf=new mPDF();
$data=mysqli_fetch_array($exe);
echo $data[2];








// 	$html .='<br>Ajay'.$key;		//no need to store data in array
// }
// // $html=$htmlt;
// $mpdf->WriteHTML($html);
// $mpdf->Output();




?>