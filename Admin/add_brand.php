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

 <div class="col-lg-3 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-info">
 <h1 class="text-white text-center"> Add Brand</h1>
 </div><br>

 <label class="text-center"> Brand name: </label>
 <input type="text" name="brand_name" class="form-control"> <br>

 <button class="btn bg-dark text-white" type="submit" name="done"> Add </button><br>
 </div>
 </form>
 </div>

 <?php
include ("../Controller/connn.php");

if(isset($_POST['done'])){

 $brand_name = $_POST['brand_name'];
 $q = " INSERT INTO brands(brand_name) VALUES ('$brand_name')";

 $query = mysqli_query($conn,$q);
 header('location: brand.php');
}
?>

</body>
</html>