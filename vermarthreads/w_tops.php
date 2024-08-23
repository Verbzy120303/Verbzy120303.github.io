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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
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
                <li><a href="#all-products">Shop All</a></li>
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

    <section id="all-products">
        <div class="name-content">
            <h1>Women's Top</h1>
        </div>
    </section>

    <section id="products">
        <div class="product-box">
            <a href="women's.php" class="text-dark" style="font-size: 40px;"><i class="fas fa-arrow-left-long"></i></a>

            <div class="product-category">

            <table id="example" class="table">
                <thead>
                    <tr>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="product">
                                <div class="product-image">
                                    <img src="images/womens/tops/item8.png" alt="">
                                    <a href="">View Item</a>
                                </div>
                                <div class="product-content">
                                    <div class="icons">
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                    </div>
                                    <div class="srp">
                                        <span>$50.00</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
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
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="script.js"></script>

    <script>
    $(document).ready(function (){
        $('#example').DataTable();
    })
  </script>
</body>
</html>