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
<?php
include("../Admin/add_brand.php"); // to have the same page as edit and delete brand
?>

  <br>
 <div class="container">
 <div class="col-lg-10">

 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-info text-white text-center">
 
 <th> Brand ID </th>
 <th> Brand Name </th>
 <th> Edit Brand</th>
 <th> Delete Brand</th>


 </tr >

 <?php

 $q = "select * from brands";

 $query = mysqli_query($conn,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['brand_id'];  ?> </td>
 <td> <?php echo $res['brand_name'];  ?> </td>
 <td> <button class="btn-primary btn "> <a href="Update_brand.php?brand_id=<?php echo $res['brand_id']; ?>" class="text-white"> Edit</a> </button> </td>
 <td> <button class="btn-danger btn"> <a href="Delete_brand.php?brand_id=<?php echo $res['brand_id']; ?>" class="text-white"> remove </a>  </button> </td>
 
 </tr>
 

 <?php 
 }
  ?>
  
 
 </table> 
 

 </div>
 </div>
 

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>
