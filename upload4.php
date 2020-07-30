 <?php  
 
    $con = mysqli_connect("localhost", "root", "", "transportation"); 
    
 
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO emission VALUES (100,'$file')";  
      if(mysqli_query($con, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
          header('Location: welcomed.php');
      }  

      
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <link rel="stylesheet" href="butt.css">
            
            <style>
                div.f {
  
  top:20px;
  left:105px;
  font-size:24px;
  background-color: #FFF;
  margin: 20px 500px 600px 915px;
  
  z-index: -1;


}
             
      body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
    background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRXuu32kzGjrUrbOLODZLKQtsTpjo0XrCC04vrtauFFWKxUXfkk");
    background-color: #fff;
    background-repeat: no-repeat;
      background-position: left center;
}

           </style>  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
          
      </head>  
      <body>  
           <br /><br />  
           <div class="f">
           <div class="container" style="width:500px;">  
                <h3 align="center">Insert Emission Certificate</h3>  
                <br />  
                <form method="post" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" />  
                     <br />  
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                </form>  
                <br />  
                <br /> 
</div>

                </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  
