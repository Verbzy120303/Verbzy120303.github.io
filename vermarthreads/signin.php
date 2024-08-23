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
                <li><a href="index.php">Home</a></li>
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

    <div class="signin">
        <div class="signin-container">
            <div class="signin-title">
                <h1>Sign In</h1>
            </div>
            <div class="form">
                <form action="">
                    <div class="input-box">
                        <span class="icon">
                            <i class="fas fa-user"></i>
                        </span>
                        <input type="text" placeholder="Username or Email" required>
                    </div>
                    <div class="input-box">
                        <span class="icon">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input type="password" placeholder="Password" required>
                    </div>
    
                    <div class="remember">
                        <label for=""><input type="checkbox"> Remember me</label>
                        <a href="#">Forgot Password?</a>
                    </div>
    
                    <button type="submit" class="signin-btn">Sign In</button>

                    <div class="or">
                        <span>or sign in with</span>
                        <div class="signin-icons">
                            <a href=""><i class="fa-brands fa-facebook"></i></a>
                            <a href=""><i class="fa-brands fa-google"></i></a>
                            <a href=""><i class="fa-brands fa-tiktok"></i></a>
                        </div>
                    </div>
    
                    <div class="register">
                        <p>Don't have an account? <a href="signup.php" class="up">Sign up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>