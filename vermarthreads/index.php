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
        <div class="logo"><a href="#home"><img src="images/logo/logo white.png">VERMAR THREADS</a></div>
        <div>
            <ul class="nav-links my-auto">
                <li><a href="#home" class="active">Home</a></li>
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
                <li><a href="about.php">About</a></li>
                <div class="account">
                    <button class="dropbtn" onclick="myFunction()">Acount
                        <i class="fa fa-angle-down"></i>
                      </button>
                      <div class="dropdown-content" id="myDropdown">
                        <a href="mypurchases.php">My Purchases</a>
                        <a href="myvouchers.php">My Vouchers</a>
                        <a href="myaddresses.php" class="drop-divider">Profile</a>
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

    <section id="home">
        <div class="name-content">
            <h1>Discover Your Style with Vermar Threads</h1>
        <a href="shopall.php">Explore our Collection</a>
        </div>
    </section>

    <section id="category">
        <div class="img-container">
            <div class="img-box">
                <div class="box">
                    <img src="images/category/women.jpg">
                </div>
                <div class="category-link">
                    <a href="women's.php">Shop Women <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            <div class="img-box">
                <div class="box">
                    <img src="images/category/men.jpg">
                </div><div class="category-link">
                    <a href="men's.php">Shop Men <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section id="info1">
        <div class="content">
            <div class="title">
                <h2>Sustainable and Ethical Fashion</h2>
            </div>
            <div class="paragraph">
                <p>At Vermar Threads, we believe that fashion can be both beautiful and responsible. That's why we are committed to creating ethically made clothing that is sustainable and eco-friendly. Our products are made with love and care, so you can look good and feel good at the same time.</p>
            </div>
            <a href="about.php">Learn More About Us</a>
            
        </div>
        <div class="image1">
                <img src="images/about/img1.jpeg">
            </div>        
            <div class="image2">
                <img src="images/about/image2.jpeg">
            </div>
    </section>

    <section id="info2">
        <div class="content2">
            <div class="title">
                <h2>Why Choose Vermar Threads?</h2>
            </div>
            <div class="paragraph">
                <p>We take pride in our commitment to sustainable and ethical fashion. Our clothing is carefully crafted using only the highest quality materials, so you can enjoy long-lasting comfort and style. Plus, our eco-friendly practices help reduce waste and protect the planet.</p>
            </div>
            <a href="shopall.php">Explore our Collection</a>
        </div>
        <div class="image3">
            <img src="images/about/img5.jpg">
        </div>
    </section>

    <div class="content-logo">
        <a href="#home"><img src="images/logo/logo black.png" alt="">VERMAR THREADS</a>
    </div>

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