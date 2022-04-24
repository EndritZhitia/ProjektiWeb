<?php
session_start();
if(!isset($_SESSION["email"]))
{
	header("location:../login.php");
}
?>


<?php
require_once '../controllers/MenuController.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

<?php include '../css/dashboard.css'; ?>


</style>
<header>
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
                    <!--<li id="products"><a href="products.php">Products</a>
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
                    <li><a href="help.php">Help</a></li>-->
                    <li><a href="create.php">Create</a></li>
                    <li><a href="../logout.php">Log Out</a></li>
                </ul>
            </div>
        </div>
        
    </header>

<body>
    <main>
       
     <div class="main-div">
        <table class="content-table">
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Product Img</th>
                <th class="td3">Describtion</th>
                <th>Price</th>
            </tr>
            <tbody>
                <?php
                $m = new MenuController;
                $allProducts = $m->readData();
                foreach($allProducts as $product){?>
                <tr>
                    <td><?php echo $product['id']?></td>
                    <td><?php echo $product['ProductName']?></td>
                    <td><?php echo $product['ProductImg']?></td>
                    <td id='td3'><?php echo $product['Describtion']?></td>
                    <td><?php echo $product['Price']?></td>
                    <td><a href="edit.php?id=<?php echo $product['id']?>">Edit</a></td>
                    <td><a href="delete.php?id=<?php echo $product['id']?>">Delete</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
     </div>
  
    </main>

</body>
</html>