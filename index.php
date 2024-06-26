<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RedStore  | Ecommerce Website Design</title>

    <!-- stylesheet -->

    <link rel="stylesheet" href="style.css">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<!-- icon cdn link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>
    <div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
               <a href="index.php"> <img src="images/logo.png" alt="" width="125px"> </a>
            </div>
            <nav>
                <ul id="menuitems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="product.php">Product</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="Account.php">Account</a></li>
                </ul>
            </nav>
           <!-- <a href="cart.html"> <img src="images/cart.png" width="30px" height="30px" alt="icon"> </a> -->
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
        <div class="row">
            <div class="col-2">
                <h1>Give Your Workout <br>A New Style!</h1>
                <p>Success isn't always about greatness. It's about
                    consistency. Consistent <br> hand work gains success. Greatness will come.
                </p>
                <a href="" class="btn">Explor Now &#8594</a>
            </div>
            <div class="col-2">
                <img src="images/image1.png" alt="">

            </div>
        </div>

    </div>
</div>

<!-------- Featured categories ------->
<div class="categories">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <img src="images/category-1.jpg" alt="">
            </div>
            <div class="col-3">
                <img src="images/category-2.jpg" alt="">

            </div>
            <div class="col-3">
                <img src="images/category-3.jpg" alt="">

            </div>
        </div>
    </div>
</div>

<!-------- Featured product ------->
<div class="small-container">
    <h2 class="title">Featured product</h2>
    <div class="row">
        <div class="col-4">
        <a href="product details blue.php"> <img src="images/productb-5.jpg" alt=""></a>
           <a href="product details blue.php" ><h4>Red Printed T-Shirt</h4> </a>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>₹250.00</p>
        </div>
        <div class="col-4">
           <a href="shoe.php"> <img src="images/shoeb-1.jpg" alt=""></a>
            <h4>Block Shoe</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>₹2999.00</p>
        </div>
        <div class="col-4">
           <a href="shorts.php"> <img src="images/shorts.jpg" alt=""></a>
            <h4>Sport Shorts</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>₹499.00</p>
        </div>
        <div class="col-4">
        <a href="product watch.php"> <img src="images/watch.jpg" alt=""></a>
            <h4>Brands Watch</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>₹1999.00</p>
        </div>
    </div>
    <!-- laterst product  -->
    <h2 class="title">Latest Product</h2>
    <div class="row">
        <div class="col-4">
            <img src="images/product-5.jpg" alt="">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>₹250.00</p>
        </div>
        <div class="col-4">
            <img src="images/product-6.jpg" alt="">
            <h4>Block Show</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>₹2999.00</p>
        </div>
        <div class="col-4">
            <img src="images/product-7.jpg" alt="">
            <h4>Block Pant</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>₹499.00</p>
        </div>
        <div class="col-4">
        <a href="product details red.php"> <img src="images/product-1.jpg" alt=""></a>
            <h4>Blue Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>₹250.00</p>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="images/product-9.jpg" alt="">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>₹250.00</p>
        </div>
        <div class="col-4">
            <img src="images/product-10.jpg" alt="">
            <h4>Block Show</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>₹2999.00</p>
        </div>
        <div class="col-4">
            <img src="images/product-11.jpg" alt="">
            <h4>Block Pant</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>₹499.00</p>
        </div>
        <div class="col-4">
            <img src="images/product-12.jpg" alt="">
            <h4>Blue Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>₹250.00</p>
        </div>
    </div>
</div>

<!--------Offer------->
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
            <a href="smart.php"><img src="images/exclusive.png" alt="" class="offer-img"></a>
            
            </div>
            <div class="col-2">
                <p>Exclusively Available on RedStore</p>
                <h1>Smart Brand 4</h1>
                <small>
                    The Mi Smart Brand 4 features a 39.9% larger (than Mi Bnad 3)
                    AMOLED color full-touch display width adjustable bringhtness, 
                    so everything is clear asbe.
                </small>
                <a href="smart.php" class="btn">Buy Now &#8594;</a>
            </div>
        </div>
    </div>
</div>


<!-- ------Testimonial -------->

<div class="testimonial">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <i class="fa fa-quote-left"></i>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit tenetur laboriosam possimus nisi rerum provident molestias dolorem
                     atque sint quos debitis explicabo cupiditate a, porro cum esse deserunt? Commodi, minus.</p>
                     <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>   
                    <img src="images/user-1.png" alt="">
                    <h3>Sean Parker</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit tenetur laboriosam possimus nisi rerum provident molestias dolorem
                     atque sint quos debitis explicabo cupiditate a, porro cum esse deserunt? Commodi, minus.</p>
                     <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>   
                    <img src="images/user-2.png" alt="">
                    <h3>Mike Smith</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit tenetur laboriosam possimus nisi rerum provident molestias dolorem
                     atque sint quos debitis explicabo cupiditate a, porro cum esse deserunt? Commodi, minus.</p>
                     <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>   
                    <img src="images/user-3.png" alt="">
                    <h3>Mabel Jae</h3>
            </div>
        </div>

    </div>
</div>

<!-- ------Brands------ -->

<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="images/logo-godrej.png" alt="">
            </div>
            <div class="col-5">
                <img src="images/logo-oppo.png" alt="">
            </div>
            <div class="col-5">
                <img src="images/logo-coca-cola.png" alt="">
            </div>
            <div class="col-5">
                <img src="images/logo-paypal.png" alt="">
            </div>
            <div class="col-5">
                <img src="images/logo-philips.png" alt="">
            </div>
        </div>
    </div>
</div>

<!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Dowload Our App</h3>
                    <p>Dowload App for Android and ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="images/play-store.png" alt="">
                        <img src="images/app-store.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/logo-white.png" alt="white">
                    <p>Our Purpose Is to sustainably Make the Pleasure and 
                        Benefite of Sports Accessinble to the Many.
                    </p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy </li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us </h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Telegrom </li>
                        <li>Utube </li>

                        
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright © 2024. RedStore</p>
        </div>
    </div>
    
    <!-- js for toggle menu -->
    <script>
        var menuitems = document.getElementById("menuitems");

        menuitems.style.maxHeight ="0px";

        function menutoggle(){
            if( menuitems.style.maxHeight =="0px")
            {
                menuitems.style.maxHeight ="200px";
            }else{
                menuitems.style.maxHeight ="0px";
                
            }
        }
    </script>
    
</body>
</html>
