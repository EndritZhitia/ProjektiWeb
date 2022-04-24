<?php

$host="localhost";
$user="root";
$password="";
$db="projektiWeb";

session_start();


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$email=$_POST["email"];
	$password=$_POST["password"];


	$sql="select * from user where email='".$email."' AND passwordi='".$password."' ";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

	if($row["role"]==0)
	{	

		$_SESSION["email"]=$email;

        
		header("location: ../index.php");
		
	}

	elseif($row["role"]==1)
	{

		$_SESSION["email"]=$email;
		header("location: ../views/menuDashboard.php");
	}

	else
	{
		echo "email or password incorrect";
	}

}




?>