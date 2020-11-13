<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hashtag";

try
    {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
// ========================= config the languages ================================
error_reporting(E_NOTICE ^ E_ALL);

?>
