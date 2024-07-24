<?php
include('connect.php');

$stmt = $con->prepare("SELECT * FROM products WHERE product_category='Pastries_' LIMIT 4");
$stmt->execute();
$pastriesv2_products = $stmt->get_result();



?>