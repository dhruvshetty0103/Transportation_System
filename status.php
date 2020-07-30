<!DOCTYPE html>
<html>
<?php
session_start();

$con=mysqli_connect("localhost","root","");
if(!$con){
    die("cannot coonect");
}
mysqli_select_db($con,"transportation");

   $status = $_POST['status'];
   $vtype = $_POST['vtype'];
   echo "Your status is $status";


   $loc=$_POST['stt'];
   $city=$_POST['city'];
      echo("Your selected state is $loc");
      echo ("Your selected city is $city");

      $phone=$_SESSION['id'];
 	echo ("Your current contact no is. $phone");

 	$con=mysqli_connect("localhost","root","","transportation");
 	$sql="select Driver_id from driver where Dphone='$phone'";
 	$result=mysqli_query($con,$sql);
 	$row=mysqli_fetch_array($result);
 	$Did=$row['Driver_id'];

 	
  //echo "Your driver id is $Did";
   
$sql="insert into dstatus values($Did,'$status','$loc','$city','$vtype')";
$var=mysqli_query($con,$sql);
if(!$var){
	echo("not happening mannn");
}
 
          

mysqli_close($con);

	
?>

<head>
  <title>Info page</title>
  <link rel="stylesheet" type="text/css" href="buttoncss.css">
</head>

<body style="background-color:lightgreen;">
<div class="container">
<form action="logout.php" method="post">
  <button type="submit" class="btn btn2"/>Logout</button>
 </form>
</div>
</body>
</html>