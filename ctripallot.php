<?php

$con=mysqli_connect("localhost","root","");
if(!$con){
    die("cannot coonect");
}
mysqli_select_db($con,"transportation");

mysqli_query($con,"insert into trip(Client_id,Driver_id,Ccity,Drcity,Vtype)
select c.Client_id,d.Driver_id,c.Pcity,c.Dcity,d.Vtype
from dstatus d,cstatus c
where c.Pcity=d.City and d.Vtype=c.Vtype and d.Status='available'");

mysqli_close($con);
  
?>


<!DOCTYPE html>
<html>
<head>
  <title>Info page</title>
  <link rel="stylesheet" type="text/css" href="buttoncss.css">
</head>

<body style="background-color:red;">
<div class="container">
  <form action="logout.php" method="post">
    <button type="submit" class="btn btn2"/>Logout</button>
 </form>

</div>
</body>
</html>