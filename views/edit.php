<?php
    require_once '../controllers/MenuController.php';
    $pId = null;
    if(isset($_GET['id'])){
        $pId = $_GET['id'];
    }
    $menu = new MenuController;
    $currentMenu = $menu->edit($pId);
    echo $pId;
    if(isset($_POST['submit'])){
        $menu->update($_POST,$pId);
    }
?>

        <div class="header-div">
            <div class="logo-div">
               <a href="index.html"><img src="../Images/logo1.png" alt="Llogo"></a> 
            </div>
            <div class="searchBar-div">
                <input type="search" placeholder="Search" id="search">
                <button id="search-Button">Search</button> 
            </div>
            <div class="nav-div">
                <ul class="nav-list">
                    <li class="nav-list-li"><a href="index.php">Home</a></li>
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
                </ul>
            </div>
        </div>
        
    </header>
<div class="create-product-div">
    <form action="" class="create-product-form" method="POST">
        <p>Enter product Name</p>
        <input type="text" name="productName"><br>
        <p>Choose Product Image</p>
        <input type="file" name="productImg"><br>
        <p>Enter Product Describtion</p>
        <textarea name="describtion" cols="40" rows="20"></textarea><br>
        <p>Enter Product Price</p>
        <input type="number" name="price"><br>
        <input type="submit" name="submit" value="save">
    </form>
</div>

<style>
    <?php include '../css/edit.css'; ?>
</style>