<?php

$dsn = "mysql:host=localhost;dbname=news_base";
$user = "news_base_user";
$pass = "Zuper12310";

try {
    
$db = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    "ERR: " . $e->getMessage();
}


?>