<?php

$host = "localhost";
$dbname = "agenda";
$user = "root";
$password = "";


try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $err) {
    $error = $err->getMessage();
    echo "Error: $error";
}