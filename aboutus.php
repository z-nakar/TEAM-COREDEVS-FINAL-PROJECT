<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <style> 
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        section {
            padding: 60px 0;
        }

        .about {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 20px;
            margin-top: 3%;
          
            position: relative;
            background: url('assets/img/HistoryAvocado.jpg') no-repeat center center;
            background-size: cover;
            overflow: hidden;
        }

        .about::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(20px);
            z-index: 1;
        }

        .about-img,
        .about-text {
            position: relative;
            z-index: 2;
        }

        .about-img {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .img-carousel {
            width: 100%;
            max-width: 600px;
            height: 500px; /* Adjusted height */
        }

        .img-carousel img {
            width: 100%;
            height: 100%; /* Ensure images fill the carousel */
            object-fit: cover; /* Ensure the image covers the area */
            border-radius: 10px;
        }

        .about-text {
            flex: 1;
            padding: 20px;
        }

        .about-text h2 {
            font-size: 2.5em; /* Adjusted font size */
            margin-bottom: 20px;
            font-weight: bold;
            text-align: left;
        }

        .about-text p {
            margin-bottom: 20px;
            line-height: 1.6;
            font-weight: normal;
            font-size: 1.2em; /* Adjusted font size */
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #8e8686;
        }
    </style>
    <title>About US Page</title>
</head>
<body>
   
 <?php include('header.php')?>
    
    <section class="about" id="about">
        <div class="about-img img-carousel">
            <div><img src="assets/img/HistoryAvocado.jpg" alt="History Image 1"></div>
            <div><img src="assets/img/historyAvocado2.jpg" alt="History Image 2"></div>
            <div><img src="assets/img/historyAvocado4.jpg" alt="History Image 3"></div>
        </div>
        <div class="about-text">
            <h2>Our History</h2>
            <p>In the heart of a bustling city, Avocado Street Cafe was founded by Dhessa Gin Cruz, a visionary with a deep passion for coffee and a dream of creating something truly special. The cafe started with a single mission: to offer an unparalleled coffee experience that blends rich tradition with innovative flair.</p>
            <p>Dhessa's journey began with the creation of their iconic iced coffee, which quickly became a sensation among coffee enthusiasts. This unique blend combined the finest beans with a refreshing twist, capturing the essence of relaxation and delight in every sip. The cafe's atmosphere, warm and inviting, soon became a haven for locals and visitors alike, eager to experience the magic of Dhessa's creations.</p>
            <p>As word of Avocado Street Cafe's exceptional offerings spread, the cafe's popularity soared. Patrons from all walks of life came to enjoy not only the renowned iced coffee but also a variety of delectable treats and expertly crafted beverages. The ambiance, characterized by its cozy decor and friendly service, made it a favorite spot for gatherings, meetings, and moments of respite.</p>
            <p>Today, Avocado Street Cafe continues to thrive, staying true to its roots while embracing new trends and innovations in the coffee world. Dhessa's legacy endures through each carefully crafted cup, reflecting a commitment to quality and a passion for the art of coffee. As the cafe looks to the future, it remains dedicated to providing a memorable experience that honors its rich history and the enduring spirit of its founder.</p>
            <a href="#" class="btn">Learn More</a>
        </div>
    </section>
    
    <?php include('footer.php')?>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('.img-carousel').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                dots: true,
                arrows: true,
            });
        });
    </script>
</body>
</html>
