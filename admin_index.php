<?php 
 include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .sidebar {
            float: left;
            width: 20%;
            background-color: #333;
            color: #fff;
            height: 100vh;
            padding-top: 20px;
            box-sizing: border-box;
        }
        .sidebar a {
            color: #fff;
            padding: 10px;
            display: block;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #575757;
        }
        .content {
            float: left;
            width: 80%;
            padding: 20px;
            box-sizing: border-box;
        }
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
        h1 {
            margin-top: 0;
        }
        .card {
            background-color: #f4f4f4;
            padding: 20px;
            margin: 10px 0;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>Admin Dashboard</h1>
    </div>
    <div class="container clearfix">
        <div class="sidebar">
            <a href="#dashboard">Dashboard</a>
            <a href="#users">Users</a>
            <a href="admin_order.php">Orders</a>
            <a href="admin_products.php">Products</a>
            <a href="#settings">Settings</a>
        </div>
        <div class="content">
            <h2>Welcome, Admin</h2>
            <div class="card">
                <h3>Dashboard</h3>
                <p>Overview of your site's performance.</p>
            </div>
            <div class="card">
                <h3>Users</h3>
                <p>Manage your site's users.</p>
            </div>
            <div class="card">
                <h3>Orders</h3>
                <p>View and manage customer orders.</p>
            </div>
            <div class="card">
                <h3>Products</h3>
                <p>Manage your product inventory.</p>
            </div>
            <div class="card">
                <h3>Settings</h3>
                <p>Configure site settings.</p>
            </div>
        </div>
    </div>
</body>
</html>
