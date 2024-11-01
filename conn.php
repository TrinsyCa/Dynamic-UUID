<?php

// Database Commands
// Connection Variable is $db

$host = "localhost"; // Database Host Location
$dbname = "your_db_name"; // Database Name
$charset = "utf8"; // Database Charset (Optional)
$root = "root"; // Database Username
$password = ""; // Database User Password
$port = 3306; // MYSQL Port

try {
  $db = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=$charset", $root, $password);
} 
catch (PDOException $error) {
    echo "Database Error: " . $error->getMessage();
    exit;
}