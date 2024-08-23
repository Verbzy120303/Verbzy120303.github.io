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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <a href="myaddresses.php" class="drop-divider">My Addresses</a>
                        <a href="signin.php">Sign In</a>
                        <a href="signup.php">Sign Up</a>
                      </div>
                </div>
                <div class="bag">
                    <a href="shoppingbag.php" class="active"><i class="fas fa-shopping-bag"></i></a>
                </div>
            </ul>
        </div>
    </nav>

    <div class="shoppingbag">
        <div class="shoppingbag-container">
            <div class="bag-title">
                <div class="bag">
                    <h2>Profile</h2>
                </div>
                <div class="edit">
                    <h4>Edit</h4>
                </div>
            </div>
            <div class="row pt-5 px-5">
                <div class="col px-4">
                    <div class="row">
                      <label for="" class="mb-2 text-lg">First Name</label>
                    <input type="text" placeholder="Verbon John" class="form-control text-lg mb-3" disabled>  
                    </div>
                    <div class="row">
                      <label for="" class="mb-2 text-lg">Last Name</label>
                    <input type="text" placeholder="Valdez" class="form-control text-lg mb-3" disabled>  
                    </div>
                </div>
                <div class="col">
                    <label for="" class="mb-2 text-lg">Bio</label>
                    <textarea name="" id="" rows="5" class="form-control" disabled>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione nulla totam sunt quam ducimus? Animi quidem, deleniti distinctio minima aut rem voluptatibus dolorem reprehenderit officia consectetur, ipsa libero corrupti quo!
                    </textarea>   
                </div>
                <hr class="mt-4">
            </div>
            <div class="row px-5">
                <div class="col px-4">
                    <div class="row">
                      <label for="" class="mb-2 text-lg">Gender</label>
                      <input type="text" placeholder="Verbon John" class="form-control text-lg mb-3" disabled>  
                    </div>
                    <div class="row">
                      <label for="" class="mb-2 text-lg">Birthday</label>
                      <input type="text" placeholder="12/03/2003" class="form-control text-lg mb-3" disabled>  
                    </div>
                </div>
                <div class="col px-4">
                    <div class="row">
                        <label for="" class="mb-2 text-lg">Phone</label>
                        <input type="text" placeholder="Verbon John" class="form-control text-lg mb-3" disabled>  
                    </div>
                    <div class="row">
                        <label for="" class="mb-2 text-lg">Email</label>
                        <input type="email" placeholder="v*****3@gmail.com" class="form-control text-lg mb-3" disabled>  
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>