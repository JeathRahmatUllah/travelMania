<?php
session_start();
include_once('db_connect.php');
$username = $_GET['username'];


if (isset($_POST['add'])) {
	$name = $_POST['name'];
	$description = $_POST['description'];
	
	$username = $_GET['username'];
	$price = $_GET['price'];
	$con = $_POST['con'];
	$area = $_POST['area'];

	
        
       

	$sql = "INSERT INTO hotel (title,	description	,hotel_area,price		) VALUES ('$name', '$description', '$area','$price')";


	if ($conn->query($sql)) {
		$_SESSION['success'] = 'Hotel added successfully';
	} else {
		$_SESSION['error'] = 'Something went wrong while adding';
	}
} else {
	$_SESSION['error'] = 'Fill up add form first';
}


 header("Location: home.php?username=$username");
?>