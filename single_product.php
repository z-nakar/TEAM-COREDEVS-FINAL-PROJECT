<?php
include('connect.php');

if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    $stmt = $con->prepare("SELECT * FROM products WHERE product_id = ?");
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $single_product = $stmt->get_result();
} else {
    header('Location: index.php');
    exit();
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
    <title>Product Details</title>
</head>
<body>
<?php include('header.php'); ?>

        <!--Single Product-->
        <section class="container single-product my-5 pt-5">
            <div class="row mt-5">
                <?php while ($row = $single_product->fetch_assoc()) { ?>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <img class="img-fluid w-100" src="assets/img/<?php echo htmlspecialchars($row['product_image']); ?>" id="mainImg">
                    <div class="small-img-group">
                        <div class="small-img-col">
                            <img src="assets/img/<?php echo htmlspecialchars($row['product_image']); ?>" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="assets/img/<?php echo htmlspecialchars($row['product_image2']); ?>" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="assets/img/<?php echo htmlspecialchars($row['product_image3']); ?>" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="assets/img/<?php echo htmlspecialchars($row['product_image4']); ?>" width="100%" class="small-img">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h6>Avocado Street Coffee</h6>
                    <h3 class="py-4"><?php echo htmlspecialchars($row['product_name']); ?></h3>
                    <h2>₱ <?php echo htmlspecialchars($row['product_price']); ?></h2>

                    <form method="POST" action="cart.php">
    <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($row['product_id']); ?>"/>
    <input type="hidden" name="product_image" value="<?php echo htmlspecialchars($row['product_image']); ?>"/>
    <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($row['product_name']); ?>"/>
    <input type="hidden" name="product_price" value="<?php echo htmlspecialchars($row['product_price']); ?>"/>

    <!-- Quantity -->
    <div class="mb-3">
        <label for="product_quantity" class="form-label">Quantity</label>
        <input type="number" name="product_quantity" id="product_quantity" class="form-control" value="1" min="1"/>
    </div>

    <div class="mb-3">
        <label class="form-label">Add-Ons</label>
        <div class="row">
            <div class="col-6 form-check d-flex align-items-center">
                <input class="form-check-input" type="checkbox" name="add_cream" id="add_cream">
                <label class="form-check-label ms-2" for="add_cream">Cream</label>
            </div>
            <div class="col-6 form-check d-flex align-items-center">
                <input class="form-check-input" type="checkbox" name="add_foam" id="add_foam">
                <label class="form-check-label ms-2" for="add_foam">Foam</label>
            </div>
        </div>
    </div>

    <!-- Sugar Level -->
    <div class="mb-3">
        <label for="sugar_level" class="form-label">Sugar Level</label>
        <select name="sugar_level" id="sugar_level" class="form-select">
            <option value="0">No Sugar</option>
            <option value="1">Less Sugar</option>
            <option value="2">Normal Sugar</option>
            <option value="3">Extra Sugar</option>
        </select>
    </div>

    <button class="buy-btn" type="submit" name="add_to_cart">Add to Cart</button>
</form>

                    <h4 class="mt-5 mb-5">Product details:</h4>
                    <p><?php echo htmlspecialchars($row['product_description']); ?>
                        <br><br><strong>Additional Information:</strong> Can be customized with milk, cream, or sweeteners according to preference.
                    </p>
                </div>
                <?php } ?>
            </div>
        </section>

        <!--Related Products-->
        <section id="related-products" class="my-5 pb-5">
            <div class="container text-center mt-5 py-5">
                <h3>More of This:</h3>
                <hr class="mx-auto">
            </div>
            <div class="row mx-auto container-fluid">
                <?php include('get_pastriesv2.php'); ?>
                <?php while ($row = $pastriesv2_products->fetch_assoc()) { ?>
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="assets/img/<?php echo htmlspecialchars($row['product_image']); ?>">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name"><?php echo htmlspecialchars($row['product_name']); ?></h5>
                    <h4 class="p-price">₱ <?php echo htmlspecialchars($row['product_price']); ?></h4>
                    <a href="single_product.php?product_id=<?php echo htmlspecialchars($row['product_id']); ?>"><button class="buy-btn">Buy now</button></a>
                </div>
                <?php } ?>
            </div>
        </section>

        <?php include('footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
      var mainImg = document.getElementById("mainImg");
      var smallImg = document.getElementsByClassName("small-img"); 

      for (let i = 0; i < smallImg.length; i++) {
        smallImg[i].onclick = function() {
          mainImg.src = smallImg[i].src;
        }
      }
    </script>
</body>
</html>
