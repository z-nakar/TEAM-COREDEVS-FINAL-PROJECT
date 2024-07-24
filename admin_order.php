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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
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
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }
        .modal-content {
            background-color: #fff;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 5px;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>Admin Dashboard</h1>
    </div>
    <div class="container clearfix">
        <div class="sidebar">
            <a href="admin_index.php">Dashboard</a>
            <a href="#users">Users</a>
            <a href="admin_order.php">Orders</a>
            <a href="admin_products.php">Products</a>
            <a href="#settings">Settings</a>
        </div>
        <div class="content">
            <h2>Welcome, Admin</h2>
          
            <div class="card">
                <h3>Orders</h3>
                <p>Manage your orders of the users.</p>
            </div>

            <!-- Orders Section -->
            <div class="card">
                <h3>Orders</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer Name</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1001</td>
                            <td>John Doe</td>
                            <td>Latte</td>
                            <td>2</td>
                            <td>$8.00</td>
                            <td>Pending</td>
                            <td><button onclick="openModal('1001')">Update</button></td>
                        </tr>
                        <tr>
                            <td>1002</td>
                            <td>Jane Smith</td>
                            <td>Croissant</td>
                            <td>1</td>
                            <td>$3.00</td>
                            <td>Completed</td>
                            <td><button onclick="openModal('1002')">Update</button></td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>

        


    <!-- The Modal -->
    <div id="updateModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h3>Update Order Status</h3>
            <form id="updateForm">
                <label for="order-id">Order ID</label>
                <input type="text" id="order-id" name="order-id" readonly>
                
                <label for="order-status">Status</label>
                <select id="order-status" name="order-status" required>
                    <option value="Pending">Pending</option>
                    <option value="Completed">Completed</option>
                    <option value="Cancelled">Cancelled</option>
                </select>
                
                <button type="submit">Update Status</button>
            </form>
        </div>
    </div>

    <script>
        function openModal(orderId) {
            document.getElementById('order-id').value = orderId;
            document.getElementById('updateModal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('updateModal').style.display = 'none';
        }

        document.getElementById('updateForm').addEventListener('submit', function(event) {
            event.preventDefault();
            // Handle form submission, e.g., send the data to the server
            closeModal();
            alert('Order status updated');
        });
    </script>
</body>
</html>
