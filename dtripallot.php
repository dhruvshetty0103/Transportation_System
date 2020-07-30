<?php

$con=mysqli_connect("localhost","root","");
if(!$con){
    die("cannot coonect");
}
mysqli_select_db($con,"transportation");

   
$sql="UPDATE trip set Driver_id=(SELECT d.Driver_id from cstatus c,dstatus d where c.Pcity=d.City and d.status='available' and c.Vtype=d.Vtype)";
$var=mysqli_query($con,$sql);
if(!$var){
  echo("not happening mannn2");
}


$sql="UPDATE trip set Drcity=(SELECT d.City from cstatus c,dstatus d where c.Pcity=d.City and d.status='available' and c.Vtype=d.Vtype)";
$var=mysqli_query($con,$sql);
if(!$var){
  echo("not happening mannn4");
}
 

mysqli_close($con);
  
?>
<form action="logout.php" method="post">
  <button type="submit" class="button button-block"/>Logout</button>
 </form>
