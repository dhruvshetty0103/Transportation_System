<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="buttoncss.css">
</head>
<body style="background-color:lightpink;">
  
  <?php session_start();
    $phone=$_SESSION['cid'];
    echo "$phone";

    //$_SESSION['id']=$phone ;
  ?>
<div class="container">
  <form action="cstatus.php" method="post">
    <h1>WelcomeYou Successfully logged in</h1>
    <h2>Please select your Vehicle Type<br></h2>

    <input type="radio" name="vtype" value="Goods">Goods<br>
    <input type="radio" name="vtype" value="Crops">Crops<br>
    <input type="radio" name="vtype" value="Passenger">Passenger<br>

    <label for="qty";align="center"><h2>Number of units</h2></label><br>
        <input type="number" placeholder="Ex:150" name="qty" required><br>  
     
    <h2>Please Select Your Current State And City</h2>     
      <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"></script>

    <script type="text/javascript" src="city.js"></script>
    <select onchange="print_city('state', this.selectedIndex);" id="sts" name ="stt" class="form-control"  required></select>
    <select id ="state" class="form-control" name="city" required></select>
    <script language="javascript">print_state("sts");</script><br>

    <button type="submit" class="btn btn1"/>Submit</button>


  </form>
  </div>
</body>
</html>