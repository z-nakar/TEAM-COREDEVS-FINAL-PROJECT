<?php
include('connect.php');

$stmt = $con->prepare("SELECT * FROM products LIMIT 4");
$stmt->execute();
$_products = $stmt->get_result();



?>