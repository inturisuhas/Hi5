<?php
$servername = "localhost";
$username = "suhas";
$password = "suhasiiit1607";
$dbname = "Restaurents";
//$name=$_POST['name']; $email=$_POST['email']; $location=$_POST['location']; 
$Restaurentname = $_POST['Restaurent name']; $Coupon = $_POST['Coupon']; $Discount= $_POST['Discount']; $Condition = $_POST['Condition']; 
$Validity=$_POST['Validity']; $Link=$_POST['Link']; 


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `restaurents` (`id`,`name`,`coupon`,`discount`,`condition`,`validity`,`link`) VALUES (1,$Restaurentname,$Coupon,$Discount , $Condition,$Validity,$link)";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
