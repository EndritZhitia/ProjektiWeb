<?php

    require_once '../config/Database.php';
    class MenuController{
        public $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function readData(){
            $query = $this->db->pdo->query('SELECT * from products');
            return $query->fetchAll();
        }

        public function readUserData(){
            $query = $this->db->pdo->query('SELECT * from user');
            return $query->fetchAll();
        }

        public function insert($request){
            $query = $this->db->pdo->prepare('INSERT INTO products (ProductImg, ProductName, Describtion, Price)
                                                VALUES (:ProductImg, :ProductName, :Describtion, :Price)');
            $query->bindParam(':ProductImg',$request['productImg']);
            $query->bindParam(':ProductName',$request['productName']);
            $query->bindParam(':Describtion',$request['describtion']);
            $query->bindParam(':Price',$request['price']);
    
            $query->execute();
            return header('Location: menuDashboard.php');
          }

        public function insertUser($request){
            $query = $this->db->pdo->prepare('INSERT INTO user (emri,mbiemri,email,passwordi) VALUES (:emri,:mbiemri,:email,:passwordi,)');
            $query->bindParam(':emri',$request['emri']);
            $query->bindParam(':mbiemri',$request['mbiemri']);
            $query->bindParam(':email',$request['email']);
            $query->bindParam(':passwordi',$request['password']);
            $query->execute();
            return header('Location: menuDashboard.php');
          }
    

        public function edit($id){
            $query = $this->db->pdo->prepare('SELECT * from products Where id = :id');
            $query->bindParam(':id', $id);
            $query->execute();

            return $query->fetch();
        }

        public function update($request, $id){
            $query = $this->db->pdo->prepare('UPDATE products SET ProductImg = :ProductImg, ProductName = :ProductName, 
            Describtion = :Describtion, Price = :Price Where id = :id');
            $query->bindParam(':ProductImg',$request['productImg']);
            $query->bindParam(':ProductName',$request['productName']);
            $query->bindParam(':Describtion',$request['describtion']);
            $query->bindParam(':Price',$request['price']);
            $query->bindParam(':id', $id);
            $query->execute();

            return header('Location: menuDashboard.php');
        }

        public function delete($id){
            $query = $this->db->pdo->prepare('DELETE from products WHERE id=:id');
            $query->bindParam(':id', $id);
            $query->execute();

            return header('Location: menuDashboard.php');
        }
    }

?>