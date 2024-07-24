<?php
include('connect.php');

$stmt = $con->prepare("SELECT * FROM products WHERE product_category='NonCoffeeClub' LIMIT 4");
$stmt->execute();
$noncoffeeclub_products = $stmt->get_result();



?>