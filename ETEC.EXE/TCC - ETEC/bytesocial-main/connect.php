<?php
    $databaseIP = 'localhost';
    $database = "bd_Byte";
    $user = "root";
    $password = "";
    $conn = "";
    
    try {
        $conn = new PDO("mysql:host=$databaseIP;dbname=$database;port=3306", $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        die("Connection failed: " . $e->getMessage());
      }