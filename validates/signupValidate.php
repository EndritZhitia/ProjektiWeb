<?php

require_once 'controllers/MenuController.php';



if(!empty($_POST['emri']) && !empty($_POST['mbiemri']) && !empty($_POST['email']) && !empty($_POST['password'])){
    if(strlen($_POST['emri']) >= 2 && strlen($_POST['mbiemri']) >= 2 && strlen($_POST['password']) >= 8 ){
        $menu = new MenuController;
        if(isset($_POST['signupBtn'])){
            $menu->insertUser($_POST);
        }
    }
}

?>