<?php
session_start();

session_destroy();
$_SESSION = array();//array gol

header('Location: login.php');
die();
?>