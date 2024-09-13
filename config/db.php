<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
                                              //ชื่อ ฐานข้อมูล
        $conn = new PDO("mysql:host=$servername;dbname=bms2", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>