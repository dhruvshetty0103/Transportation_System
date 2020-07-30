<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="buttoncss.css">
</head>
<body style="background-color:lightblue;">
  <?php session_start();
    $phone=$_SESSION['id'];
    echo "$phone";

    //$_SESSION['id']=$phone ;
  ?>
  <div class="container">
    <form action="status.php" method="post">
  <h1>Welcome You Successfully logged in</h1>
  

Please select your status<br>

<input type="radio" name="status" value="available">Available<br>
<input type="radio" name="status" value="unavilable">Unavailable<br>

Please select your Vehicle Type<br>

<input type="radio" name="vtype" value="Goods">Goods<br>
<input type="radio" name="vtype" value="Crops">Crops<br>
<input type="radio" name="vtype" value="Passenger">Passenger<br>

  
 
   Please Select Your Current State And City     
  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>


  <script type="text/javascript" src="city.js"></script>
<select onchange="print_city('state', this.selectedIndex);" id="sts" name ="stt" class="form-control"  required></select>
<select id ="state" class="form-control" name="city" required></select>
<script language="javascript">print_state("sts");</script><br>
<button type="submit" class="btn btn2"/>Search</button>
 </form>
</div>

</body>
</html>