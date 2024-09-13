<?php

include 'connectDB.php';
 
  
  $sql = "SELECT typeName,typeID FROM typegame  ";

  $rs = $con->query($sql);

  

   $count_row = mysqli_num_rows($rs);
      
    
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
     <style>
         .image{
          width:100%;
          height:300px ;

         }

     </style>
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
                       <a class="nav-link active text-danger btn-dark" aria-current="page" href="showtype.php">เกมส์</a>
                     </li>
                    
                     <li class="nav-item">
                       <a class="nav-link active" aria-current="page" href="profile.php">โปรไฟล์</a>
                     </li> 
                     <li class="nav-item">
                       <a class="nav-link active" aria-current="page" href="signin.php">เข้าสู่ระบบ</a>
                     </li> 
                   </ul>            
               
                 </div>
               </div>
             </nav>
           </div>
    
  
     <div class="container">

     <form  action="showgame.php" method="GET">
        ประเภทเกม:
         

    <select class="form-select" aria-label="Default select example " name="typeID" id="typeID" required >
         <option selected>กรุณาเลือก</option>
        <?php 
        //5. check if found data from database
        if ($count_row > 0) {
        // echo "Found";
        //6. Read data each row
        while ($result = $rs->fetch_assoc()) {
       ?>
        <option value="<?php echo $result['typeID']?>"><?php echo $result['typeName']; ?> </option>
        
       <?php
        } //End while loop
        }// End if
    
        ?>
        
</select>
        <br>
      <button type="submitt" class="btn btn-primary" required >ค้นหา</button>
                 
      
</form>
 

<?php
$sql1 = "SELECT pictype,typeName,detail FROM typegame  ";

$rs1 = $con->query($sql1);

$count_row1 = mysqli_num_rows($rs1);

?>
      
      <div class="row">
         
     <?php 
        //5. check if found data from database
        if ($count_row1 > 0) {
        // echo "Found";
        //6. Read data each row
        while ($result1 = $rs1->fetch_assoc()) {

    ?>

                                               
                                             <!-- style="width:100%; height:90%; ควบคุมเรื่องภาพ -->
          <div class="col-6 mt-5">
          
             <div class="card mb-3 bg">
    <img class="image" src="image/pictype/<?php  echo $result1['pictype']  ?>" class="card-img-top" alt="...">
               <div class="card-body">
    <h5 class="card-title"><?php  echo $result1['typeName']  ?></h5>
    <p class="card-text"><?php echo $result1['detail']  ?></p>
    
               </div>
             </div>

          </div>

          <?php
        } //End while loop
    }// End if
    
    ?>
     </div> 




     </div>
       

    
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>

     <?php include 'footer.html'; ?>
  </body>
</html>

