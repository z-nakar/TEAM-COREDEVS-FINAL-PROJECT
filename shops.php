<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
    <style>
        .product img{
            width: 100%;
            height: auto;
            box-sizing: border-box;
            object-fit: cover;
        }
        .pagination a{
            color: rgb(156, 95, 14);
        }
        .pagination li:hover a{
            background-color: rgb(156, 95, 14);
            color:white;
            
        }
    </style>
</head>
<body>
<?php include('header.php')?>

          <!--Banner-->
          <section id="banner" class="my-5 py-5">
            <div class="container">
                <h4>Avocadoodles</h4>
                <h1>Your Daily Dose of Delights</h1>
                <button class="btn text-uppercase">Coffee Time!</button>
            </div>
        </section>



        <!--Coffees-->
        <section id="featured" class="my-5 pb-5">
            <div class="container text-center mt-5 py-5">
                <h3>Coffee</h3>
                <hr class=" mx-auto">
                <p>Here you can check our featured Coffee!</p>
            </div>
            <div class="row mx-auto container-fluid">
                <?php include('get_coffee.php');?>

                <?php while($row=$coffee_products->fetch_assoc()) { ?>
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="assets/img/<?php echo $row['product_image'];?>">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name"><?php echo $row['product_name'];?></h5>
                    <h4 class="p-price">₱ <?php echo $row['product_price'];?></h4>
                    <a href="single_product.php?product_id=<?php echo $row['product_id'];?>"><button class="buy-btn">Buy now</button></a>
                </div>
                <?php } ?>
              
            </div>
        </section>




                <!--STOP HERE-->
        <!--Iced Coffee-->
        <section id="featured" class="my-5 pb-5">
            <div class="container text-center mt-5 py-5">
                <h3>Iced Coffee</h3>
                <hr class=" mx-auto">
                <p>Here you can check our featured Iced Coffee!</p>
            </div>
            <div class="row mx-auto container-fluid">
                <?php include('get_icedcoffee.php'); ?>
                <?php while($row=$icedcoffee_products->fetch_assoc()) { ?>
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="assets/img/<?php echo $row['product_image'];?>">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name"><?php echo $row['product_name'];?></h5>
                    <h4 class="p-price">₱ <?php echo $row['product_price'];?></h4>
                    <a href="single_product.php?product_id=<?php echo $row['product_id'];?>"><button class="buy-btn">Buy now</button></a>
                </div>

              <?php }?>
            </div>
        </section>






        <!--Non-Coffee Club-->
        <section id="featured" class="my-5 pb-5">
            <div class="container text-center mt-5 py-5">
                <h3>Non-Coffee Club</h3>
                <hr class=" mx-auto">
                <p>Here you can check our featured Non-Coffee Club!</p>
            </div>
            <div class="row mx-auto container-fluid">
                <?php include('get_noncoffeeclub.php'); ?>
                <?php while($row=$noncoffeeclub_products->fetch_assoc()) { ?>
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="assets/img/<?php echo $row['product_image'];?>">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name"><?php echo $row['product_name'];?></h5>
                    <h4 class="p-price">₱ <?php echo $row['product_price'];?></h4>
                    <a href="single_product.php?product_id=<?php echo $row['product_id'];?>"><button class="buy-btn">Buy now</button></a>
                </div>

               <?php }?>
            </div>
        </section>


         <!--Pastries-->
         <section id="featured" class="my-5 pb-5">
            <div class="container text-center mt-5 py-5">
                <h3>Pastries</h3>
                <hr class=" mx-auto">
                <p>Here you can check our featured Pastries!</p>
            </div>
            <div class="row mx-auto container-fluid">
                <?php include('get_pastries.php'); ?>
                <?php while($row=$pastries_products->fetch_assoc()) {?>
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="assets/img/<?php echo $row['product_image'];?>">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name"><?php echo $row['product_name'];?></h5>
                    <h4 class="p-price">₱ <?php echo $row['product_price'];?></h4>
                    <a href="single_product.php?product_id=<?php echo $row['product_id'];?>"><button class="buy-btn">Buy now</button></a>
                </div>

               <?php }?>
            </div>
        </section>

         <!--Pastries-->
         <section id="featured" class="my-5 pb-5">
            <div class="container text-center mt-5 py-5">
                <h3>Pastries</h3>
                <hr class=" mx-auto">
                <p>Here you can check our featured Pastries!</p>
            </div>
            <div class="row mx-auto container-fluid">
                <?php include('get_pastriesv2.php'); ?>
                <?php while($row=$pastriesv2_products->fetch_assoc()) {?>
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="assets/img/<?php echo $row['product_image'];?>">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name"><?php echo $row['product_name'];?></h5>
                    <h4 class="p-price">₱ <?php echo $row['product_price'];?></h4>
                    <a href="single_product.php?product_id=<?php echo $row['product_id'];?>"><button class="buy-btn">Buy now</button></a>
                </div>

               <?php }?>
            </div>
        </section>

                <hr class="mx-auto">

        <!-- Customers-->
    <section class="customers" id="customers">
        <div class="heading">
            <h2 class="text-center">Our Valued Customers</h2>
        </div>
        <!-- Container-->
        <div class="customers-container">
            <div class="box">
                <div class="stars">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <p>"I had the pleasure of trying Avocadoodles's signature iced coffee at , and it was truly exceptional. The blend of flavors was perfectly balanced, with just the right amount of sweetness and a smooth, refreshing finish. Each sip was a delightful experience, and it's evident that Avocadoodles's passion for coffee shines through in every glass. The iced coffee at Avocado Street Cafe isn't just a beverage—it's a work of art, and I can't wait to come back for another taste."</p>
                <h2>Richard Alarcon</h2>
                <img src="assets/img/richard.jpg" alt="">
            </div>
            <div class="box">
                <div class="stars">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <p>"Avocadoodles's iced coffee at Avocado Street Cafe is a revelation! From the first sip to the last, I was captivated by the depth of flavor and the refreshing sensation it brought. It's evident that Avocadoodles has mastered the art of crafting the perfect iced coffee, as every element, from the quality of the beans to the precision of the brewing process, comes together seamlessly. Avocado Street Cafe's iced coffee has become my go-to drink whenever I need a pick-me-up, and I can't recommend it highly enough."</p>
                <h2>Zairel Nakar</h2>
                <img src="assets/img/xai.jpg" alt="">
            </div>
            <div class="box">
                <div class="stars">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <p>"Avocadoodles's iced coffee at Avocado Street Cafe is simply divine! The moment I took my first sip, I was transported to coffee heaven. The blend of flavors is so harmonious, with just the right balance of sweetness and bold coffee notes. It's clear that Avocadoodle pours their heart and soul into every cup, and it's no wonder that Avocado Street Cafe has become renowned for its exceptional iced coffee. If you haven't tried it yet, you're missing out on a true culinary masterpiece!"</p>
                <h2>Jacob Bautista</h2>
                <img src="assets/img/erp.jpg" alt="">
            </div>
        </div>
    </section>



    <?php include('footer.php')?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>