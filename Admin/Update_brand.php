<?php

 include '../Controller/connn.php';

 if(isset($_POST['done'])){

 $brand_id = $_GET['brand_id'];
 $brand_name = $_POST['brand_name'];
 $q = " update brands set brand_id=$brand_id, brand_name='$brand_name' where brand_id=$brand_id  ";

 $query = mysqli_query($conn,$q);

 header('location: brand.php');
 }

?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<style>
    body{
   background-color: #7d3cff;
}
  </style>

 <div class="col-lg-3 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-info">
 <h1 class="text-white text-center"> Edit brand</h1>
 </div><br>

 <label class='text-center'>Name: </label>
 <input type="text" name="brand_name" class="form-control"> <br>

 <button class="btn bg-dark text-white" type="submit" name="done"> Save</button><br>


 </div>
 </form>
 </div>
</body>
</html>