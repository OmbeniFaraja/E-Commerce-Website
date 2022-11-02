<?php
    include("process_login.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <title>Faraja Shop</title>
        <link rel="stylesheet" href="../css/home.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Akshar:wght@300;400;700&display=swap" rel="stylesheet">
    </head>
    <body>

        <!--DESIGNING THE HEADER-->
        <section class="header">
            <nav>
                <a href="home.php"><img src="../images/logo4.PNG"></a>
                <div class="navlinks">
                    <ul>
                        <li><a href="home.php">HOME</a></li>
                        <li><a href="login.php">LOG IN</a></li>
                        <li><a href="about.php">ABOUT US</a></li>
                        <li><a href="search.php">SEARCH</a></li>
                        <li><a href="cart.php">CART</a></li>
                    </ul>
                </div>
            </nav>

            <div class="textbox">
                <h4>WELCOME TO FARAJA SHOP</h4>
                <p>The Best Look. Anytime, Anywhere</p>
            </div>
        </section>
        
        <!--DESIGNING THE ANNOUNCEMENTS BANNER-->
        <section class="clothes">
            <h1 id="hot">SHOP THE HOTTEST ARRIVALS!</h1><br>
            <div class="shopping">
                <div class="announcement-row">
                    <div class="catergory-col">
                    <a class="category-link" href="categories.html"><h3>SHOP CATERGORIES.</h3>
                        <p>Men, Women and Children!</p></a>
                </div>
                <div class="catergory-col">
                    <a  class="category-link"href="men.php"><h3>MEN'S WEAR.</h3>
                        <p>Shirts, Shorts, Suits, Shoes, and Many More!</p></a>
                </div>
                <div class="women.html">
                    <a class="category-link" href="women.php"><h3>WOMEN'S WEAR.</h3>
                        <p>Shirts, Shorts, Suits, Shoes, and Many More!</p></a>
                </div>
                <div class="catergory-col">
                    <a class="category-link" href="children.php"><h3>CHILDREN'S CORNER.</h3>
                        <p>Shirts, Shorts, Suits, Shoes, and Many More!</p></a>
                </div>
            </div>
            </div>
        </section>
        <!--DESIGNING THE BENEFITS AND OFFERS-->
        <section>
            <div id="slider">
                <figure>
                    <img src="../images/picsart1.jpg">
                    <img src="../images/picsart2.jpg">
                    <img src="../images/picsart3.jpg">
                    <img src="../images/picsart2.jpg">
                    <img src="../images/picsart1.jpg">
                </figure>
            </div>
        </section>
            
        <!--DESIGNING THE SERVICES-->
    
        <div class="benefits-announcement">
            <div class="our-benefits"><h1>OUR BENEFITS</h1>
            <P>Faraja Shop is one of the leading platforms <br> To offer you style and affordability!</P>
        </div>
        </div>

        <div class="benefits-list">
            <div class="benefits-col">
                <h3>FREE SHIPPING FOR ORDERS ABOVE 3K!</h3>
                <p>Grab yourself some clothes and rest on you couch <br> While we deliver the item to you</p>
            </div>
            <div class="benefits-col">
                <h3>EASY RETURNS.</h3>
                <p>Buying an item here is not set in stone immediately <br> You can return an item within 7 days after purchase!</p>
            </div>
            <div class="benefits-col">
                <h3>FREE SHIPPING FOR NEW CUSTOMERS.</h3>
                <p>New here? The delivery is on the HOUSE!</p>
            </div>
        </div>
    

        <!--DESIGNING SHOPPING-->
        <div class="row">
            <div class="clothes-col">
                <img src="../images/formen.webp">
                <a href="men.php"><div class="layer"><h1>For Men</h1></div></a>
            </div>
            <div class="clothes-col">
                <img src="../images/forwomen.webp">
                <a href="women.php"><div class="layer"><h1>For Women</h1></div></a>
            </div>
            <div class="clothes-col">
                <img src="../images/forkids.webp">
                <a href="children.php"><div class="layer"><h1>For Kids</h1></div></a>
            </div>
        </div>

        <!--ADDING PRODUCTS ON THE HOMEPAGE-->
        <section class="products">
            <h1 id="shop-products">SHOP OUR PRODUCTS</h1><br>
            <div class="products-row">
                <div class="products-col">
                    <img src="../images/pro_jacket.webp"> <br>
                    <h4>College Jacket - Lilac</h4>
                    <p>KSh. 3500</p>
                    <span><a href="login.php"><h5>SHOP NOW</h5></a><br><br></span>
                </div>
                <div class="products-col">
                    <img src="../images/pro_jaacket2.webp"> <br>
                    <h4>College Jacket - Lilac</h4>
                    <p>KSh. 3500</p>
                    <a href="login.php"><h5>SHOP NOW</h5></a><br><br>
                </div>
                <div class="products-col">
                    <img src="../images/pro_jacket3.webp"> <br>
                    <h4>College Jacket - Lilac</h4>
                    <p>KSh. 3500</p>
                    <a href="login.php"><h5>SHOP NOW</h5></a><br><br>
                </div>
                <div class="products-col">
                    <img src="../images/pro_backpack.webp"> <br>
                    <h4>College Backpack - Black</h4>
                    <p>KSh. 3500</p>
                    <a href="login.php"><h5>SHOP NOW</h5></a><br><br>
                </div>
                <div class="products-col">
                    <img src="../images/pro_backpack2.webp"> <br>
                    <h4>College Backpack - White</h4>
                    <p>KSh. 3500</p>
                    <a href="login.php"><h5>SHOP NOW</h5></a><br><br>
                </div>
                <div class="products-col">
                    <img src="../images/pro_backpack3.webp"> <br>
                    <h4>College Backpack - Red</h4>
                    <p>KSh. 3500</p>
                    <a href="login.php"><h5>SHOP NOW</h5></a><br><br>
                </div>
                <div class="products-col">
                    <img src="../images/pro_sweat.webp"> <br>
                    <h4>Sweatpants White - Heavy Fabric</h4>
                    <p>KSh. 2500</p>
                    <a href="login.php"><h5>SHOP NOW</h5></a><br><br>
                </div>
                <div class="products-col">
                    <img src="../images/pro_sweat2.webp"> <br>
                    <h4>Sweatpants Black - Heavy Fabric</h4>
                    <p>KSh. 2500</p>
                    <a href="login.php"><h5>SHOP NOW</h5></a><br><br>
                </div>
                <div class="products-col">
                    <img src="../images/pro_sweat3.webp"> <br>
                    <h4>Sweatpants Gray - Heavy Fabric</h4>
                    <p>KSh. 2500</p>
                    <a href="login.php"><h5>SHOP NOW</h5></a><br><br>
                </div>
            </div>
        </section>

            <!--STAY CONNECTED-->
            <div class="footer">
                <div class="info">
                    <div class="social-links">
                        <h3>STAY CONNECTED!</h3>
                        <ul>
                            <a href="">FACEBOOK</a>
                            <a href="">TWITTER</a>
                            <a href="">INSTAGRAM</a>
                        </ul>  
                    </div>
                    <div class="quick-links">
                        <h3>QUICK LINKS</h3>
                        <ul>
                            <li><a href="">About us</a></li>
                            <li><a href="">Privacy Policy</a></li>
                            <li><a href="">Terms and Conditions</a></li>
                            <li><a href="">Terms of Service</a></li>
                            <li><a href="">Refund Policy</a></li>
                        </ul>
                    </div>
                    <div class="help">
                        <h3>NEED HELP?</h3>
                        <ul>
                            <li><a href="">Track Order</a></li>
                            <li><a href="">Shipping Information</a></li>
                            <li><a href="">Return an Item</a></li>
                            <li><a href="">FAQ</a></li>
                            <li><a href="">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="newsletter">
                        <h3>NEWSLETTER</h3>
                        <ul>
                            <li><p>Subscribe to our Newsletter <br> to stay updated on new <br> promotions!</p></li><br>
                            <label for="">Email: </label><br>
                            <input type="text" id="email"> <br><br>
                            <input class="btn" type="submit" value="REGISTER"><br>
                        </ul>
                    </div>
                    <div class="feedback">
                        <h3>FEEDBACK</h3>
                            <form action="process_feedback.php" method="POST">
                                <label for="name">Name</label> <br>
                                <input type="text" id="name" name="name" required><br>
                                <label for="email">Email</label><br>
                                <input type="text" id="email" name="email" required><br>
                                <label for="feedback">Feedback</label> <br>
                                <textarea name="feedback" id="feedback" cols="30" rows="10" required></textarea><br>
                                <input type="submit" class="btn" name="feedback_btn" value="SEND FEEDBACK">
                            </form>
                    </div>
                                <div class="copyright">
                <h1>THANK YOU FOR SHOPPING WITH US!</h1>
            </div>
                </div>
            </div>


    </body>
</html>