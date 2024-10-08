<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vermar Threads</title>
    <link rel="icon" href="images/logo/logo white.png">
    <link rel="stylesheet" href="images/logo/logo white.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mediaqueries.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="desktop-nav">
        <div class="logo"><a href="index.php"><img src="images/logo/logo white.png">VERMAR THREADS</a></div>
        <div>
            <ul class="nav-links my-auto">
                <li><a href="index.php" class="">Home</a></li>
                <div class="account">
                    <button class="drop" onclick="myFunction1()">Products
                        <i class="fa fa-angle-down"></i>
                      </button>
                      <div class="dropdown-content" id="Dropdown">
                        <a href="women's.php">Women</a>
                        <a href="men's.php">Men</a>
                      </div>
                </div>
                <li><a href="shopall.php">Shop All</a></li>
                <li><a href="#about" class="active">About</a></li>
                <div class="account">
                    <button class="dropbtn" onclick="myFunction()">Acount
                        <i class="fa fa-angle-down"></i>
                      </button>
                      <div class="dropdown-content" id="myDropdown">
                        <a href="mypurchases.php">My Purchases</a>
                        <a href="myvouchers.php">My Vouchers</a>
                        <a href="myaddresses.php" class="drop-divider">My Addresses</a>
                        <a href="signin.php">Sign In</a>
                        <a href="signup.php">Sign Up</a>
                      </div>
                </div>
                <div class="bag">
                    <a href="shoppingbag.php"><i class="fas fa-shopping-bag"></i></a>
                </div>
            </ul>
        </div>
    </nav>

    <section id="about">
        <div class="name-content">
            <h1>Our Story</h1>
            <div class="content1">
                <p>At Vermar Threads, we are passionate about fashion and sustainability. Our journey started with the desire to create stylish clothing that is also eco-friendly. We believe that fashion and sustainability can go hand in hand, and we strive to make a positive impact on the environment.</p>
            </div>
        </div>
    </section>

    <section id="content2">
        <div class="content2-container">
            <div class="content2-box">
                <img src="images/about/img6.jpg" alt="">
            </div>
            <div class="content2-box">
                <img src="images/about/img7.jpg" alt="">
            </div>
            <div class="content2-box">
                <img src="images/about/img8.jpg" alt="">
            </div>
        </div>
    </section>

    <section id="content3">
        <div class="content3-container">
            <div class="content3-image">
                <img src="images/about/img9.jpg" alt="">
            </div>
            <div class="content3-content">
                <h1>Sustainable Practices</h1>
                <h3>From Sourcing to Packaging</h3>
                <div class="content3-para">
                    <p>At Vermar Threads, we are committed to using sustainable practices in every aspect of our business. We carefully source our materials from suppliers who share our values and prioritize environmental responsibility. We also use eco-friendly packaging to minimize our impact on the planet.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="content4">
        <div class="content4-container">
            <div class="content4-content">
                <h1>Local Manufacturing</h1>
                <h3>We are proud to support local communities by manufacturing our clothing in small factories with fair labor practices. We believe in treating people with respect and dignity.</h3>
                <div class="content4-para">
                    <p>Our factories are carefully selected based on their commitment to sustainability and ethical practices. We work closely with them to ensure that our clothing is made with the highest standards of quality and craftsmanship.</p>
                </div>
            </div>
            <div class="content4-image">
                <img src="images/about/img10.jpg" alt="">
            </div>
        </div>
    </section>

    <section id="content5">
        <div class="content5-container">
            <div class="content5-image">
                <img src="images/about/img11.jpg" alt="">
            </div>
            <div class="content5-content">
                <h1>Eco-Friendly Fabrics</h1>
                <h3>Recycled and Sustainable Fibers</h3>
                <div class="content5-para">
                    <p>We use only the finest eco-friendly fabrics, crafted from recycled and sustainably grown fibers. Our fabrics are not only good for the environment, but also soft and comfortable to wear. We believe that sustainable fashion should not compromise on style or comfort.</p>
                </div>
            </div>
        </div>
    </section>
    
    <div class="footer">
        <div class="footer-box">
            <div class="footer-content">
                <h4>COMPANY INFO</h4>
                <a href="">About VERMAR</a>
                <a href="">Fashion Blogger</a>
                <a href="">Sustainability</a>
                <a href="">Careers</a>
                <a href="">#BeVERMARmodels</a>
            </div>

            <div class="footer-content">
                <h4>HELP & SUPPORT</h4>
                <a href="">Shipping Info</a>
                <a href="">Returns</a>
                <a href="">Refund</a>
                <a href="">How To Order</a>
                <a href="">How To Track</a>
                <a href="">Size Guide</a>
            </div>

            <div class="footer-content">
                <h4>CUSTOMER CARE</h4>
                <a href="">Contact Us</a>
                <a href="">Payment Method</a>
                <a href="">Bonus Point</a>
                <a href="">VERMAR VIP</a>
            </div>

            <div class="footer-content">
                <h4>FOLLOW US FOR MORE</h4>

                <div class="social-media">
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                    <a href=""><i class="fa-brands fa-youtube"></i></a>
                    <a href=""><i class="fa-brands fa-tiktok"></i></a>
                </div>  
                <label>Enter email here*</label>              
                <input type="email">
                <input type="button" value="Submit" class="submit">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>