<?php include('server.php'); 
    //if user is not logged in, they cannot access this page
    /*if(empty($_SESSION['username'])){
        header('location: login.php');
    }*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="main">
        <header class="mainHeader">
            <div id="logo">
                <img src="wantshoppe.png">
                <div class="content">
                <?php if(isset($_SESSION['success'])): ?>
                        <div class="error success">
                        <h5>
                            <?php 
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                            ?>
                        </h5>
                    </div>
                <?php endif ?>
                <?php if(isset($_SESSION["username"])): ?>
                    <p>User: <strong><?php echo $_SESSION['username']; ?></strong></p><br>
                    <p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
                <?php endif ?>  
            </div>
            </div>
        </header>
        <nav class="mainNav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="product.php">Products</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="#">Services</a>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="forum.php">Forum</a></li>
                </ul>
                </li>
                <li><a href="#">Account</a>
                <ul>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                </ul>
                </li>
            </ul>
        </nav>
        <article class="mainContent">
            <div class="advertisement">
                <div class="w3-content w3-section" style="max-width:600px">
                    <img class="mySlides" src="img/cc1cfa723a02341a.jpg" style="width:100% height:20px">
                    <img class="mySlides" src="img/flipkart-laptop-audio-offer.jpg" style="width:100% height:20px">
                    <img class="mySlides" src="img/ces-dell-xps-15-2-in-1.jpg" style="width:100% height:20px">
                    <img class="mySlides" src="img/amkette_evo_gamepad.jpg" style="width:100% height:20px">
                    <img class="mySlides" src="img/new-gadget-tablet-pc1.jpg" style="width:100% height:20px">
                    <img class="mySlides" src="img/watch-flow-healthcare-gadget2.jpg" style="width:100% height:20px">
                    <img class="mySlides" src="img/00219315.jpg" style="width:100% height:20px">
                </div>
                <script>
                    var myIndex = 0;
                    carousel();
                    function carousel()
                    {
                        var i;
                        var x = document.getElementsByClassName("mySlides");
                            for (i = 0; i < x.length; i++) {
                                x[i].style.display = "none";  
                            }
                            myIndex++;
                            if (myIndex > x.length) {myIndex = 1}    
                                x[myIndex-1].style.display = "block";  
                                setTimeout(carousel, 2000); // Change image every 2 seconds
                    }
                </script>
            </div>
        </article>
        <aside class="mainAside">
            <section id="boxes">
                    <div class="container">
                        <div class="box">
                            <img src="./img/amkette_evo_gamepad.jpg">
                            <h3>Amkette Gamepad</h3>
                            <p>Price: $2500.00</p>
                        </div>
                        <div class="box">
                            <img src="./img/apples iphone 5.jpeg">
                            <h3>Apple Iphone 5</h3>
                            <p>Price: $12990.00</p>
                        </div>
                        <div class="box">
                            <img src="./img/ces-dell-xps-15-2-in-1.jpg">
                            <h3>Cell Dell Laptop</h3>
                            <p>Price: $25000.00</p>
                        </div>
                        <div class="box">
                            <img src="./img/new-gadget-tablet-pc1.jpg">
                            <h3>Tablet PC</h3>
                            <p>Price: $1000.00</p>
                        </div>
                        <div class="box">
                            <img src="./img/Picasso-M-_black_-3.jpg">
                            <h3>Picasso M Black</h3>
                            <p>Price: $8999.99</p>
                        </div>
                        <div class="box">
                            <img src="./img/watch-flow-healthcare-gadget2.jpg">
                            <h3>PS Vita</h3>
                            <p>Price: $2500.15</p>
                        </div>
                        <div class="box">
                            <img src="./img/apples iphone 5.jpeg">
                            <h3>Apple Iphone 7</h3>
                            <p>Price: $3500.00</p>
                        </div>
                        <div class="box">
                            <img src="./img/TravelMate-P249-G2-M-2-300x300.jpg">
                            <h3>Travel Mate</h3>
                            <p>Price: $249.15</p>
                        </div>
                        <div class="box">
                            <img src="./img/smart-shoes.jpg">
                            <h3>Smart Shoes</h3>
                            <p>Price: $335.15</p>
                        </div>
                        <div class="box">
                            <img src="./img/apples iphone 5.jpeg">
                            <h3>Apple Iphone 5</h3>
                            <p>Price: $4500.90</p>
                        </div>
                        <div class="box">
                            <img src="./img/ces-dell-xps-15-2-in-1.jpg">
                            <h3>Cell Dell Laptop</h3>
                            <p>Price: $8300.15</p>
                        </div>
                        <div class="box">
                            <img src="./img/new-gadget-tablet-pc1.jpg">
                            <h3>Tablet PC</h3>
                            <p>Price: $1500.00</p>
                        </div>
                    </div>
                </section>
        </aside>
        <footer class="mainFooter">
            <p>Wantshoppe Shopping Site, Copyright &copy; 2018</p>
        </footer>
    </section>
</body>
</html>