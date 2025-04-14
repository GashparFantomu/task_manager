<?php
require 'db.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $stmt = $conn->prepare("INSERT INTO boards (name) VALUES (?)")
    $stmt -> bind_param("s", $name)
    $stmt -> execute();
    header("Location: index.php")
    
}