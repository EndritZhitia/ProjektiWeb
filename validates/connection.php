<?php
	$emri = $_POST['emri'];
	$mbiemri = $_POST['mbiemri'];
	$email = $_POST['email'];
	$password = $_POST['password'];


	// Database connection
	$conn = new mysqli('localhost','root','','projektiweb');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into user(emri, mbiemri, email, passwordi) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $emri, $mbiemri, $email, $password);
		$execval = $stmt->execute();
		return header('Location: ../index.php');
		
		$stmt->close();
		$conn->close();
	}
?>