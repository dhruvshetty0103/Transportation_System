<HTML>
<body>
<?php
$con=mysqli_connect("localhost","root","");
if(!$con){
    die("cannot coonect");
}
mysqli_select_db($con,"transportation");

    
    $firstname = filter_var($_POST["fname"], FILTER_SANITIZE_STRING);
    $lastname = filter_var($_POST["lname"], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST["pwd"], FILTER_SANITIZE_STRING);
    $address = filter_var($_POST["caddress"], FILTER_SANITIZE_STRING);
    $city = filter_var($_POST["city"], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["cemail"], FILTER_SANITIZE_STRING);
    

mysqli_query($con,"insert into client values(default,'$firstname','$lastname','$address','$city','','$phone','',null,'$email','$password');");
mysqli_close($con);
?>
<h1>Successfully Signed Up go back to home now</h1>
<body>
    <html>