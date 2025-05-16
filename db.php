<?php
$servername = "localhost";
$username = "root";
$password = ""; // implicit în XAMPP
$database = "todo";


$conn = new mysqli($servername, $username, $password, $database);

// Verificăm conexiunea
if ($conn->connect_error) {
    die("Conexiunea a eșuat: " . $conn->connect_error);
}
?>
