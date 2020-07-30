<HTML>
<body>
<?php
session_start();

$con=mysqli_connect("localhost","root","");
if(!$con){
    die("cannot coonect");
}
mysqli_select_db($con,"transportation");

    
    $fname = filter_var($_POST["fname"], FILTER_SANITIZE_STRING);
    $lname = filter_var($_POST["lname"], FILTER_SANITIZE_STRING);
    $address =filter_var($_POST["address"],FILTER_SANITIZE_STRING);
    $city =filter_var($_POST["city"],FILTER_SANITIZE_STRING); 
    $phone =filter_var($_POST["phone"],FILTER_SANITIZE_STRING); 
    $bg =filter_var($_POST["bg"],FILTER_SANITIZE_STRING); 
    $vehicalnum =filter_var($_POST["vehicalnum"],FILTER_SANITIZE_STRING); 
    $licensenum =filter_var($_POST["licensenum"],FILTER_SANITIZE_STRING); 
    $email =filter_var($_POST["email"],FILTER_SANITIZE_STRING); 
    $pwd =filter_var($_POST["pwd"],FILTER_SANITIZE_STRING);  
    echo("hello");
   

mysqli_query($con,"insert into driver values(default,'$fname','$lname','$address','$city','$phone','1998-03-05','$bg','$vehicalnum','$licensenum','$email','$pwd');");
 $_SESSION['id']=$phone ;
 $pone = $_SESSION['id'];
header('Location: upload.php');
mysqli_close($con);
?>

<body>
    <html>