<?php
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin: 10px 0 5px;
        }
        input, select, textarea {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #575757;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>Admin Dashboard</h1>
    </div>
    <div class="container clearfix">
        <div class="sidebar">
            <a href="admin_index.html">Dashboard</a>
            <a href="#users">Users</a>
            <a href="admin_order.html">Orders</a>
            <a href="admin_products.html">Products</a>
            <a href="#settings">Settings</a>
        </div>
        <div class="content">
            <h2>Welcome, Admin</h2>
            <div class="card">
                <h3>Products</h3>
                <p>Manage your product inventory.</p>
            </div>
          

            <!-- Add Product Form -->
            <div class="card">
                <h3>Add New Product</h3>
                <form action="/submit-product" method="POST">
                    <label for="product-name">Product Name</label>
                    <input type="text" id="product-name" name="product-name" required>

                    <label for="product-category">Category</label>
                    <select id="product-category" name="product-category" required>
                        <option value="coffee">Coffee</option>
                        <option value="iced-coffee">Iced Coffee</option>
                        <option value="frappes">Frappes</option>
                        <option value="non-coffee">Non-Coffee</option>
                        <option value="pastries">Pastries</option>
                    </select>

                    <label for="product-price">Price</label>
                    <input type="number" id="product-price" name="product-price" step="0.01" required>

                    <label for="product-description">Description</label>
                    <textarea id="product-description" name="product-description" rows="4" required></textarea>

                    <button type="submit">Add Product</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
