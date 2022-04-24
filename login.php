<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<header>
       <div class="header-div">
            <div class="logo-div">
               <a href="index.html"><img src="Images/logo1.png" alt="Llogo"></a> 
            </div>
            <div class="searchBar-div">
                <input type="search" placeholder="Search" id="search">
                <button id="search-Button">Search</button> 
            </div>
            <div class="nav-div">
                <ul class="nav-list">
                    <li class="nav-list-li"><a href="../index.php">Home</a></li>
                    <li id="products"><a href="products.php">Products</a>
                        <div id="dropdown-div">
                            <a href="">Smartphones</a>
                            <a href="">PC</a>
                            <a href="">Laptop</a>
                            <a href="">Gaming</a>
                            <a href="">TV</a>
                            <a href="">Audio</a>
                            <a href="">Video</a>
                        </div>
                    </li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="help.php">Help</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
        
    </header>
<main>

<div class="main-div">
    <div class="logIn-div">
                <h1>Log In</h1>
                <div class="logIn-form-div">
                    <form method="POST" action="validates/loginvalidate.php">
                    <input type="email" placeholder="Email" class="Email" id="emaili" name="email" onclick="emaili()">
                    <input type="password" placeholder="Password" class="Email" id="password" name="password" onclick="password()">
                    <a href="">Forget Password</a>
                    <input type="submit" onclick="Valido1()" name="login-Button" class="button-class" value="Login">
                    </form>
                    <hr>
                    <p>New User</p>
                    <a href="signup.php"><button class="button-class">Sign Up</button>
                    <script src="js/login.js"></script>
                 
                </div>
            </div>
</div>
        
</main> 

<footer>

<div class="footer-div">
    
            <div class="stay-connected-div">
                <h1>Stay Connected</h1>
               <div class="imgL-div">
                <a href="https://www.facebook.com/"><img src="Images/fbLogo.png" alt=""></a>
                <a href="https://twitter.com/"><img src="Images/twitterLogo.png" alt=""></a>
                <a href="https://instagram.com/"><img src="Images/instaLogo.png" alt=""></a>
                <a href="https://linkedin.com"/><img src="Images/linkedIn-Logo.png" alt=""></a>
               </div>
            </div>
            <div class="about-us">
                <h1>About Us</h1>
                <div class="a-div">
                    <a href="">Company Info</a>
                    <a href="">Policies</a>
                    <a href="">News</a>
                    <a href="">Report</a>
                </div>
            </div>
            <div class="Payment-methods-div">
                <h1>Payment Methods</h1>
                <div class="card-logo-div">
                    <img src="Images/visaCard-logo.png" alt="">
                    <img src="Images/MasterCard-logo.png" alt="">
                    <img src="Images/PayPal-logo.png" alt="">
                    <img src="Images/Discover-logo.png" alt="">
                
            </div>
</div>
</footer>
</body>
</html>