<?php
$servername = "localhost";
$username = "yiyi_subscriber";
$password = "admin";
$dbname = "yiyi_subscribers";

$emailaddress = $_POST['emailaddress']

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO emails (email_address)
VALUES ($emailaddress)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>