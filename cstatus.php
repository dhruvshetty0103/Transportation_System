<?php
session_start();

$con=mysqli_connect("localhost","root","");
if(!$con){
    die("cannot coonect");
}
mysqli_select_db($con,"transportation");

   
   $vtype = $_POST['vtype'];
   echo "$vtype";
  

   $loc=$_POST['stt'];
   $city=$_POST['city'];
   //$dloc=$_POST['dstt'];
   //$dcity=$_POST['dcity'];
   $qty=$_POST['qty'];
      echo("$loc");
      echo("$city");

      $phone=$_SESSION['cid'];
  echo (" Your phone no. is:$phone");

  $con=mysqli_connect("localhost","root","","transportation");
  $sql="select Client_id from client where Phone='$phone'";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_array($result);
  $Cid=$row['Client_id'];

  echo ("Your client id is:$Cid");
   
$sql="insert into cstatus values($Cid,'$loc','$city','','','$vtype',$qty)";
$var=mysqli_query($con,$sql);
if(!$var){
  echo("not happening mannn");
}
 header("Location: welcome2.php?id=$uphone"); 


mysqli_close($con);
  
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>

<body style="background-color:powderblue;">

</body>
</html>
