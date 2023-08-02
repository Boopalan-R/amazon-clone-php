<?php
require 'connect.php';
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $price = $_POST["price"];
  if($_FILES["image"]["error"] == 7){
    echo
    "<script> alert('Image Does Not Exist'); </script>"
    ;
  }
  else{
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png','MP4'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if ( !in_array($imageExtension, $validImageExtension) ){
      echo
      "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
    }
    else if($fileSize > 1000000){
      echo
      "
      <script>
        alert('Image Size Is Too Large');
      </script>
      ";
    }
    else{
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, 'img/' . $newImageName);
      $query = "INSERT INTO amazonproducts VALUES('', '$name', '$price', '$newImageName')";
      mysqli_query($con, $query);
      echo
      "
      <script>
        alert('Successfully Added');
        document.location.href = 'amazon.php';
      </script>
      ";
    }
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/#[[latestVersion]]#/mdb.min.css"
  rel="stylesheet"
/>
  <title></title>
  <style>

    
    
  </style>
</head>
<body>
  
<div class="box col-md-8">
		    <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
      <h6 class="lable">Username</h6>
      <input type="text" name="name" id = "name" required value="" placeholder="Enter your product name"> <br>



       <h6 class="lable">Price</h6>
      <input type="number" name="price" id = "number" required value="" placeholder="Enter your price"> <br>


      <h6 class="lable">Upload your image</h6>
      <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value="" class="imagesfiles"> <br> <br>
      <button type = "submit" name = "submit" class="sub">Submit</button>
    </form>
    <br>
</div>
<br><br>

</body>
</html>