<?php
   include 'config/db.php';
   include 'connectDB.php';
        session_start();
        require_once 'config/db.php';
        if (!isset($_SESSION['admin_login'])) {
            $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
            header('location: signin.php');}

         $id = $_SESSION['admin_login'] ;
        
         
        $sql = "SELECT * FROM form WHERE memberID= '{$id}'";
        $result = $conn->prepare($sql);
        $result->execute();
               
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>S M B Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
  <?php include 'navbar.php'; ?>
     <style>
        .pic{
            width: 400px;
            height: 300px;
        }
     </style>






  <div class="container">
        <h1 class=""><i class="bi bi-person-lines-fill"></i>Admin</h1>
    <div>
        <?php 
            if (isset($_SESSION['admin_login'])) {
                $user_id = $_SESSION['admin_login'];
                $stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                }
        ?>

        <div class="row">
            <div class="col-1"></div>
            <div class="col-3">
                <h1>⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀</h1>
                <center><img src="img/smb1.png" class="rounded float-start" alt="..." height="200" width="200"></center>
            </div>
            
            <div class="col-6">
                <h1>⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀</h1>
                <h5>⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀</h5>
                <h3 class=""> ชื่อผู้ใช้ :  <?php echo $row['username'] ?> </h3>
                <h4 class=""> ชื่อ : <?php echo $row['firstname'] ?>
                <h4 class=""> สกุล : <?php echo $row['lastname'] ?></h4>
                <h4 class=""> เบอร์โทร : <?php echo $row['phone'] ?></h4>
                <h4 class=""> ID Line : <?php echo $row['lineID'] ?></h4>
            </div>
                
            <div class="col-2">
                <h1>⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀</h1>
                <button type="button" class="btn btn-outline-primary"><a href="logout.php">ออก</a></button>
            </div>
            <div class="row">
                <div class="col-6-mb-2">
                    <button type="button" class="btn btn-outline-primary"><a href="showproductsPagination.php">ลบข้อมูล</a></button>
                
                </div>