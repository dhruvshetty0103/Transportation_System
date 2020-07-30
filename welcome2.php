<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="buttoncss.css">
</head>
<body style="background-color:lightgreen;">
  <?php session_start();
    $phone=$_SESSION['cid'];
    echo "$phone";

    //$_SESSION['id']=$phone ;
  ?> 
<div class="container">
  <form action="cstatus2.php" method="post">
   
  
 
<h2 >Please Select Your Current State And City</h2>     
  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>


  <script type="text/javascript" src="city.js"></script>
<select onchange="print_city('state', this.selectedIndex);" id="sts" name ="dstt" class="form-control"  required></select>
<select id ="state" class="form-control" name="dcity" required></select>
<script language="javascript">print_state("sts");</script><br>


<button type="submit" class="btn btn2"/>Submit</button>

</div>
</body>
</html>