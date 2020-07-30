<?php
session_start();
$con=mysqli_connect("localhost","root","","transportation");
if(!$con){
    die("cannot coonect");
}


$uphone=$_POST['phone'];

$pass=$_POST['password'];
if($uphone==''|| $pass=='')
{
        header("Location:login.php?id=Some fields are empty");
}

$qry=mysqli_query($con,"SELECT * FROM driver WHERE Dphone='$uphone';");
if(!$qry)
{
die("Query Failed: ");
}
else
{
   $row=mysqli_fetch_array($qry);
    if($uphone==$row['Dphone'])
    {
        if($uphone==$row['Dphone'] && $pass==$row['Dpassword'])
        {
            header("Location: welcomed.php?id=$uphone");  
            $_SESSION['id']=$uphone ;
            $pone = $_SESSION['id'];
//echo $email;
            

        }
        else
        {
                header("Location:wrongpass.php?id=username already taken or your password is incorrect. Please try again");

        }
    }
    else
    {   
        header("Location: notwelcome.php?id=$uphone");
    }    
}

mysqli_close($con);

  ?>