<?php

include '../Controller/connn.php';

$pid = $_GET['brand_id'];

$q = " DELETE FROM brands WHERE brand_id = $pid ";

mysqli_query($conn, $q);

header('location: brand.php');

?>
