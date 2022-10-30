<?php

 include '../Controller/connn.php';

 if(isset($_POST['done'])){

 $cat_id = $_GET['cat_id'];
 $cat_name = $_POST['cat_name'];
 $q = " update categories set cat_id=$cat_id, cat_name='$cat_name' where cat_id=$cat_id  ";

 $query = mysqli_query($conn,$q);

 header('location:categories.php');
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

 <div class="col-lg-3 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-info">
 <h1 class="text-white text-center"> Edit Category</h1>
 </div><br>

 <label class='text-center'>Name: </label>
 <input type="text" name="cat_name" class="form-control"> <br>

 <button class="btn bg-dark text-white" type="submit" name="done"> Save</button><br>


 </div>
 </form>
 </div>
</body>
</html>