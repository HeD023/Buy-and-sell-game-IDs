<?php

    //1.Connect DB (MySQL)
    include 'connectDB.php';
 //2. get data from url
    // $userid = "";
  $gameID = $_GET['gameID'];

     //3. Generate SQL Statement     
    //  // รายละเอียด
    //  $sql = "SELECT memberID,details,price,picitem FROM form WHERE gameID = '{$gameID}'"; 

 // $sql = "SELECT * FROM form f, member m 
        //  where m.memberID = f.memberID and gameID = {$gameID}";
  $sql_all ="SELECT gameID 
             FROM form f, users u 
             where  u.id = f.memberID and gameID = {$gameID}
             order by lineID,firstName";
  
  $rs_all = $con->query($sql_all);

  $count_row = mysqli_num_rows($rs_all);
   
     
  if (isset($_GET['n'])) {
    $n = $_GET['n'];
} else {
    $n = 1;
}


$itemsPerPage = 6;                             /* จำนวนข้อมูลในเเต่ละหน้า   */
$numPages = ceil($count_row / $itemsPerPage);

$start = ($n - 1) * $itemsPerPage;

     
// ********************** ข้อมูลที่เเสดงเเละจำนวน *************************
 
$sql = "SELECT *
        FROM form f, users u  
        WHERE u.id = f.memberID and gameID = {$gameID}
        order by lineID,firstName and gameID limit {$start},{$itemsPerPage}";
$rs = $con->query($sql);
$count_row = mysqli_num_rows($rs);

//   ************************** จบ  *****************************************

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>S M B Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="stylemax.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        .img{
            width:100%;
          height:300px;
        }

    </style>
</head>

<body>

<?php include 'navbar.php'; ?>   
     




    <div class="container">
         
    
    <div class="row row-cols-1 row-cols-md-3 g-4">
     
    <?php
        //5. check if found data from database
        if ($count_row > 0) {
        // echo "Found";
        //6. Read data each row
        while ($result = $rs->fetch_assoc()) {

            

        ?>

  <div class="col">
    <div class="card h-100">
      <img class="img" src="image/picitem/<?php echo 
                 $result['picitem']; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">ราคา :<?php  echo $result['price']  ?></h5>
        <p class="card-text">รายละเอียด :<?php  echo $result['details']  ?></p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">ติดต่อ LineID :<?php  echo $result['lineID']  ?></small>
      </div>
    </div>
  </div>

  <?php
                     } //End while loop
                }// End if
    
                ?>
  
  </div>











   

        <nav aria-label="Page navigation example">
            <ul class="pagination d-flex justify-content-end">
                <?php 
                    if ($n>1){                                      //  ปุ่มย้อนกลับ
                        echo  
                        "<li class='page-item'>
                            <a class='page-link' href='showitem.php?gameID=$gameID&n=". ($n-1) ."'>Previous</a>
                        </li>";
                    }else{
                        echo 
                        "<li class='page-item'>
                            <a class='page-link' href='showitem.php?gameID=$gameID&n=1'>Previous</a>
                        </li>";
                    } 
                    $i=1;
                    while($i<=$numPages){              //  สร้างปุ่มทั้งหมด
                    echo 
                        "<li class='page-item'>
                            <a class='page-link' href='showitem.php?gameID=$gameID&n=".$i."'>". $i. "</a>
                        </li>";  
                        $i++;
                    }                             
                    if ($n<$numPages){                             //เพิ่มทีละหน้า
                        echo 
                            "<li class='page-item'>
                                <a class='page-link' href='showitem.php?gameID=$gameID&n=".  ($n+1) ."'>Next</a>
                            </li>";
                    }else{
                       echo                                   //     หน้าสุดท้าย
                            "<li class='page-item'>
                                <a class='page-link' href='showitem.php?gameID=$gameID&n=".$numPages  ."'>Next</a>
                            </li>";
                           
                            // <a href="index.php?title=abc&price=1000">ส่งค่า 2 ค่า</a>
                            // ต้องส่งค่า n กับ typeID ไปให้ได้ถึงจะค้นหาเจอ
                              
                    }
                ?>
            </ul>
        </nav>
        
      
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
  
 
   
   
  <?php include 'footer.html'; ?>




</body>