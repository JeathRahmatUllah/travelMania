<!-- <?php
// $hostname = "localhost";
// $username = 'root';
// $password = '';
// $db = 'travel_mania';

// $conn = mysqli_connect($hostname,$username,$password,$db) or die("Connection failed : " . mysqli_connect_error());


?> -->

<?php
$servername = "localhost"; // Change to your MySQL server address
$username = "admin"; // Change to your MySQL username
$password = "1234"; // Change to your MySQL password
$database = "travel"; // Change to your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Perform your database operations here

$conn->close();
?>
