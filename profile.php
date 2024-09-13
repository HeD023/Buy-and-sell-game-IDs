<?php
   
   include 'config/db.php';
   include 'connectDB.php';
        session_start();
        require_once 'config/db.php';
        if (!isset($_SESSION['user_login'])) {
            $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
            header('location: signin.php');}

         $id = $_SESSION['user_login'] ;
        
         
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
    <link rel="stylesheet" href="stylemax.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  </head>
  <body>

  <div class="container-fluid ">
           
           <nav class="navbar navbar-expand-lg bg-body-tertiary">
               <div class="container-fluid">
                 <a class="navbar-brand" href="#"><i class="bi bi-controller"></i> S M B SHOP</a>
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                     <li class="nav-item">
                       <a class="nav-link active" aria-current="page" href="main.php">ข่าวสาร</a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link active " aria-current="page" href="showtype.php">เกมส์</a>
                     </li>
                    
                     <li class="nav-item">
                       <a class="nav-link active text-danger btn-dark" aria-current="page" href="profile.php">โปรไฟล์</a>
                     </li> 
                   </ul>            
               
                 </div>
               </div>
             </nav>
           </div>



     <style>
        .pic{
            width: 400px;
            height: 300px;
        }
     </style>






  <div class="container">
        <h1 class=""><i class="bi bi-person-lines-fill"></i>Profile</h1>
    <div>
        <?php 
            if (isset($_SESSION['user_login'])) {
                $user_id = $_SESSION['user_login'];
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
                <button type="button" class="btn btn-outline-primary"><a href="logout.php">ออกจากระบบ</a></button>
            </div>

                <h1>⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀</h1>

                
            <div class="row">
                <div class="col-6-mb-2">
                    <button type="button" class="btn btn-outline-primary"><a href="from.php">โพสต์</a></button>
                
                </div>

                








                
                <div class="row mt-5">
                <?php while($rs=$result->fetch()){

?>
                <div class="col-3 mt-4">

               
                <div class="card" style="width: 18rem;">
                   <img class="pic" src="image/picitem/<?php  echo $rs['picitem']  ?>" class="card-img-top" alt="...">
                   <div class="card-body">
                   <h5 class="card-title">ราคา : <?php echo $rs['price']  ?></h5>
                   <p class="card-text" >  รายละเอียด :<?php echo $rs['details']  ?></p>
                   <a href="#" class="btn btn-primary">Edit</a>
                   <a href="#" class="btn btn-primary">Delect</a>
                   
        
                </div>

     
      
                 </div>


    
        
                </div>

                <?php 
     }
     ?>
   </div>
            </div>



        </div>
    </div>
</div>

        





    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <?php include 'footer.html'; ?>

</body>
</html>