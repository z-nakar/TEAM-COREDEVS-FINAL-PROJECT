<?php
include('connect.php');

$stmt = $con->prepare("SELECT * FROM products WHERE product_category='IcedCoffee' LIMIT 4");
$stmt->execute();
$icedcoffee_products = $stmt->get_result();



?>