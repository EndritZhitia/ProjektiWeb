<?php
    require_once '../controllers/MenuController.php';
    $pId = null;
    if(isset($_GET['id'])){
        $pId = $_GET['id'];
    }
    $menu = new MenuController;
    $menu->delete($pId);
?>