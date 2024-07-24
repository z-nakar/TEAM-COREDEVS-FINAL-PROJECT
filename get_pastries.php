<?php
include('connect.php');

$stmt = $con->prepare("SELECT * FROM products WHERE product_category='Pastries' LIMIT 4");
$stmt->execute();
$pastries_products = $stmt->get_result();



?>