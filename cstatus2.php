
<!DOCTYPE html>
<html>
<head>
  <title>Info page</title>
  <link rel="stylesheet" type="text/css" href="buttoncss.css">
</head>

<body style="background-color:red;">
<div class="container">

<?php
session_start();

$con=mysqli_connect("localhost","root","");
if(!$con){
    die("cannot coonect");
}
mysqli_select_db($con,"transportation");

   
   $dloc=$_POST['dstt'];
   $dcity=$_POST['dcity'];
      echo("$dloc");
      echo("$dcity");

  $phone=$_SESSION['cid'];
  echo (" Your phone no. is:$phone");

  $con=mysqli_connect("localhost","root","","transportation");
  $sql="select Client_id from client where Phone='$phone'";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_array($result);
  $Cid=$row['Client_id'];

  echo ("Your client id is:$Cid");
   
$sql="update cstatus set Dstate='$dloc' where Client_id=$Cid";
$var=mysqli_query($con,$sql);
if(!$var){
  echo("not happening mannn");
}

$sql="update cstatus set Dcity='$dcity' where Client_id=$Cid";
$var=mysqli_query($con,$sql);
if(!$var){
  echo("not happening mannn");
}
 


mysqli_close($con);
  
?>

  
  <form action="ctripallot.php" method="post">
  <button type="submit" class="btn btn2"/>Logout</button>
 </form>
</div>
</body>
</html>

