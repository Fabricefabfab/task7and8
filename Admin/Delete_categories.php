<?php

include '../Controller/connn.php';

$pid = $_GET['cat_id'];

$q = " DELETE FROM categories WHERE cat_id = $pid ";

mysqli_query($conn, $q);

header('location:categories.php');

?>
