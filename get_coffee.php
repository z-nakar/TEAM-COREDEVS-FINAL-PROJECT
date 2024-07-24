<?php
include('connect.php');

$stmt = $con->prepare("SELECT * FROM products WHERE product_category='Coffee' LIMIT 4");
$stmt->execute();
$coffee_products = $stmt->get_result();



?>