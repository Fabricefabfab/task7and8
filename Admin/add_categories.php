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
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center"> Add Category</h1>
 </div><br>

 <label class="text-center"> Category name: </label>
 <input type="text" name="cat_name" class="form-control"> <br>

 <button class="btn bg-dark text-white" type="submit" name="done"> Add </button><br>
 </div>
 </form>
 </div>

 <?php
include ("../Controller/connn.php");

if(isset($_POST['done'])){

 $cat_name = $_POST['cat_name'];
 $q = " INSERT INTO categories(cat_name) VALUES ('$cat_name')";

 $query = mysqli_query($conn,$q);
 header('location: categories.php');
}
?>

</body>
</html>