<?php
$host = "localhost"; 
$db   = "skypower";    
$user = "root";      
$pass = "";

try {
    $con = "mysql:host=$host;dbname=$db;charset=utf8mb4";
    $PDO = new PDO($con,$user,$pass);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $err){
    die("Connection failed: " . $e->getMessage());
}
?>