<?php
$host ="localhost";
$user ="root";
$pass ="";
$db   = "e-commerce";


try {
    
    $conn = new pdo("mysql:host=$host;dbname=$db" ,$user ,$pass);
    
    
} catch (\PDOException $e) {
    
    echo 'could not connect' . $e->getMessage();

}
