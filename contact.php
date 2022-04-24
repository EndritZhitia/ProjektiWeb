<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/contact.css">
   
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
                    <li class="nav-list-li"><a href="index.php">Home</a></li>
                    <li id="products"><a href="products.html">Products</a>
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
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="help.html">Help</a></li>
                </ul>
            </div>
        </div>
        
    </header>
    <main>
        <div class="contact-div">
            <h1>Contact</h1>
            <div class="input-div">
                <input type="text" placeholder="Emri" class="Name" id="emri" onclick="emri()">
                <input type="text" placeholder="Mbiemri" class="Name" id="mbiemri" onclick="mbiemri()">
                <input type="email" placeholder="Email" class="Email" id="emaili" onclick="emaili()">
                <input type="text" placeholder="Ankesa/Kerkesa" class="describtion">
                <button onclick="Valido3() " class="submit" >Submit</button>
            </div>
        </div>
        <script src="js/contact.js"></script>
    </main>
    
</body>
</html>
