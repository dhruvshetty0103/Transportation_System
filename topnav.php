<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
    background-image: url("http://friendtravelsjsr.com/wp-content/uploads/2018/12/BG_image.jpg"), url("http://friendtravelsjsr.com/wp-content/uploads/2018/12/BG_image.jpg");
    background-color: #cccccc;
    background-size: cover;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}
input[type=text], select {
  
  width: 25%;
  
padding: 12px 20px;

  margin: 8px 0;

  display: inline-block;

  border: 1px solid #ccc;

  border-radius: 4px;

  box-sizing: border-box;

}
input[type=number], select {
  
  width: 25%;
  
padding: 12px 20px;

  margin: 8px 0;

  display: inline-block;

  border: 1px solid #ccc;

  border-radius: 4px;

  box-sizing: border-box;

}



input[type=submit] {

  width: 25%;

  background-color:#4CAF50;

  color: white;

  padding: 14px 20px;

  margin: 8px 0;
  
border: none;
  
border-radius: 4px;
  
cursor: pointer;
}

div.container {
  
  top:100px;
  left:750px;
  font-size:24px;
  background-color: #FFF;
  margin: 30px 10px 300px 300px;
  display: inline-block;
   position: absolute;

  z-index: -3;

}



.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  width:200px;
  background-color: #f1f1f1;

}


.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
 <a href="topnav.php" class="active" align="left">Home</a>
  <div class="a">
    <a href="driverreg.php">Join Us</a>
    <a href="login.php">Login</a>
    <a href="loginice.php">Driver's Here    </a>
    <a href="clientsignup.php">Sign Up</a>
  
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<div class="container" style="width:60vh">
  
  <label for="source";align="center"><b>Source Point</b></label><br>
    <input type="text" placeholder="Enter Pickup Point" name="pname" required><br>

  <label for="dest"><b>Drop Point</b></label><br>
    <input type="text" placeholder="Enter Drop Point" name="dest" required><br>
    <form action="login.php" method="post">
      <input type="submit" value="Search"><br>
    </form>
</div>


<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

<div style="padding-left:20px">
  <h2><font color="white">Reliable. Safe. Transparent</h2>
  <p>Where All The Services Meet</p></font>
</div>




<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>