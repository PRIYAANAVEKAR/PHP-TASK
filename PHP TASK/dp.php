<?php
$servername = "Mysql@localhost:3306";
$username = "root";
$password = "Priya123";
$dbname = "userdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
