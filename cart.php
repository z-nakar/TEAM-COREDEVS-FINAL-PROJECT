<?php
session_start();

if(isset($_POST['add_to_cart'])){
    if(isset($_SESSION['cart'])) { // if user has already product in the cart
        
        $product_array_ids = array_column($_SESSION['cart'], "product_id");

        // if product has already been added to the cart or not/ if exist in $products-array-ids
        if(!in_array($_POST['product_id'], $product_array_ids)) {
            $product_id = $_POST['product_id'];

            $product_array = array(
                'product_id' => $_POST['product_id'],
                'product_name' => $_POST['product_name'],
                'product_price' => $_POST['product_price'],
                'product_image' => $_POST['product_image'],
                'product_quantity' => $_POST['product_quantity']
            );
            $_SESSION['cart'][$_POST['product_id']] = $product_array;

        } else { // if product has already in the cart / or been added
            echo '<script>alert("Product was already added");</script>';

        }

    } else { // if this is the first product
        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_image = $_POST['product_image'];
        $product_quantity = $_POST['product_quantity'];

        $product_array = array(
            'product_id' => $product_id,
            'product_name' => $product_name,
            'product_price' => $product_price,
            'product_image' => $product_image,
            'product_quantity' => $product_quantity
        );
        $_SESSION['cart'][$product_id] = $product_array;
    }
    calculateTotalCart();
} else if(isset($_POST['remove_product'])){ //remove product from the cart
    $product_id = $_POST['product_id'];
    unset($_SESSION['cart'][$product_id]);
    calculateTotalCart();
} else if(isset($_POST['edit_quantity'])){
    $product_id = $_POST['product_id']; //get the id as well as the quantity
    $product_quantity = $_POST['product_quantity']; 
    $product_array =  $_SESSION['cart'][$product_id]; //get the product array from the session
    $product_array['product_quantity'] = $product_quantity; //update product quality
    $_SESSION['cart'][$product_id] = $product_array; //retrun array back to its place

    calculateTotalCart();
} else if(isset($_POST['checkout'])) {
    $selected_products = $_POST['selected_products'];
    if(empty($selected_products)) {
        echo '<script>alert("Please select products to checkout.");</script>';
    } else {
        $_SESSION['selected_cart'] = [];
        foreach($selected_products as $product_id) {
            $_SESSION['selected_cart'][$product_id] = $_SESSION['cart'][$product_id];
            unset($_SESSION['cart'][$product_id]); // remove the checked out products from the cart
        }
        header('Location: checkout.php'); // redirect to the checkout page
    }
} else {
  // header('Location: index.php');
}

function calculateTotalCart(){
    $total = 0;
    foreach($_SESSION['cart'] as $key => $value){
       $product =  $_SESSION['cart'][$key];
      $price =  $product['product_price'];
      $quantity = $product['product_quantity'];

      $total = $total + ($price * $quantity);
    }
    $_SESSION['total'] = $total;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>Cart Page</title>
    
</head>
<body>
<?php include('header.php')?>

<!-- Cart -->
<section class="cart container my-5 py-5">
    <div class="container mt-5">
        <h2>Your Cart</h2>
        <hr>
    </div>

    <table class="mt-5 pt-5">
        <tr>
            <th><input type="checkbox" id="select-all"> Select All</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>SubTotal</th>
        </tr>

        <?php foreach($_SESSION['cart'] as $key => $value) {?>
        <tr>
            <td><input type="checkbox" class="product-checkbox" data-price="<?php echo $value['product_price'] * $value['product_quantity']; ?>"></td>
            <td>
                <div class="product-info">
                    <img src="assets/img/<?php echo $value['product_image']; ?>">
                    <div>
                        <p><?php echo $value['product_name']; ?></p>
                        <small><span>₱ </span><?php echo $value['product_price']; ?></small>
                        <br>
                        <form action="cart.php" method="POST">    
                            <input type="hidden" name="product_id" value="<?php echo $value['product_id'];?>"/>
                            <input type="submit" name="remove_product" value="remove" class="remove-btn"/>
                        </form>
                    </div>
                </div>
            </td>
            <td>
                <form method="POST" action="cart.php">
                    <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>"/>
                    <input type="number" name="product_quantity" value="<?php echo $value['product_quantity']; ?>"/>
                    <input type="submit" class="edit-btn" value="edit" name="edit_quantity"/>
                </form>
            </td>
            <td>
                <span>₱</span>
                <span class="product-price"><?php echo $value['product_quantity'] * $value['product_price'];?></span>
            </td>
        </tr>
        <?php } ?>
    </table>

    <div class="cart-total">
        <table>
            <tr>
                <td>Total</td>
                <td>₱ <span id="total-amount">0.00</span></td>
            </tr>
        </table>
    </div>

    <div class="checkout-container">
        <form method="POST" action="checkout.php">
            <input type="hidden" id="selected-products" name="selected_products" value=""/>
            <input type="submit" class="btn checkout-btn" value="Checkout" name="checkout"/>
        </form>
    </div>
</section>

<?php include('footer.php')?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const selectAllCheckbox = document.getElementById('select-all');
        const productCheckboxes = document.querySelectorAll('.product-checkbox');
        const totalAmountElement = document.getElementById('total-amount');
        const selectedProductsInput = document.getElementById('selected-products');

        function updateTotalAmount() {
            let total = 0;
            let selectedProducts = [];

            productCheckboxes.forEach((checkbox, index) => {
                if (checkbox.checked) {
                    total += parseFloat(checkbox.dataset.price);
                    selectedProducts.push(index);
                }
            });

            totalAmountElement.textContent = total.toFixed(2);
            selectedProductsInput.value = JSON.stringify(selectedProducts);
        }

        selectAllCheckbox.addEventListener('change', function() {
            productCheckboxes.forEach(checkbox => {
                checkbox.checked = selectAllCheckbox.checked;
            });
            updateTotalAmount();
        });

        productCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', updateTotalAmount);
        });

        updateTotalAmount();
    });
</script>
</body>
</html>