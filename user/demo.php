<?php
 ob_start();
session_start();
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Autocomplete - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <?php
  include '../config.php';
    $select="select * from services ";
    $r=mysqli_query($con,$select);
    $stringer = "";    
    while ($data=mysqli_fetch_array($r)) 
    {
    $stringer= $stringer."\"$data[1]\", ";
          }
         
 ?>
</head>
<body>
 
<div class="ui-widget">
<form method="POST">
   <input type="text" id="tags" name="search">
  <input type="submit" name="submit">
</form>
 
</div>


                          <?php 
                            if (isset($_POST['submit'])) {
                                $_SESSION['service']=$_POST['search'];
                                header("location:services.php");
                            }
                          ?>
 <script>
  $(function() {
    var availableTags = [
     <?php   echo $stringer; ?>
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  });
  </script> 
</body>
</html>