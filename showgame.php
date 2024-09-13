<?php

include 'connectDB.php';
$typeID = $_GET['typeID'];


// $id =$_GET['typeID']  ;
// echo $typeID;
  
  $sql_all = "SELECT gameID 
              FROM game 
              WHERE typeID = '{$typeID}'
              order by gameID";

  $rs_all = $con->query($sql_all);

  $count_row = mysqli_num_rows($rs_all);
      
     
   
   
//  ********************** เงื่อนไขจำนวนหน้า *************************
       if (isset($_GET['n'])) {
        $n = $_GET['n'];
    } else {
        $n = 1;
    }
 

    $itemsPerPage = 8;                             /* จำนวนข้อมูลในเเต่ละหน้า   */
    $numPages = ceil($count_row / $itemsPerPage);

    $start = ($n - 1) * $itemsPerPage;


//   **************************** จบ ***********************************













// ********************** ข้อมูลที่เเสดงเเละจำนวน *************************
 
  $sql = "SELECT picgame,gameName,gameID 
          FROM game 
          WHERE typeID = '{$typeID}'
          order by gameID limit {$start},{$itemsPerPage}";
  $rs = $con->query($sql);
  $count_row = mysqli_num_rows($rs);
 
//   ************************** จบ  *****************************************

// $sql = "SELECT * FROM products p, categories c where p.CategoryID = c.CategoryID order by ProductID limit {$start},  {$itemsPerPage}";
// $rs = $con->query($sql);
// $count_row = mysqli_num_rows($rs);












?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S M B Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="images/favicon.ico" rel="icon" type="image/x-icon" />
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
       <link rel="stylesheet" href="stylemax.css">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


    <style>
         .image{
          width:100%;
          height:250px;
          
         }

         

     </style>
    
</head>

<body>
            
  

<?php include 'navbar.php'; ?>              

    <div class="container">
    
     
      <br>
      <br>
            <div class="row">
 
            <?php
            //5. check if found data from database
            if ($count_row > 0) {
                // echo "Found";
                //6. Read data each row

                while ($result = $rs->fetch_assoc()) {

            ?>
                      <div class="col-lg-3 mb-3">
                          <div class="card" style="width: 18rem;">
                               <img class="image" src="image/picgame/<?php echo 
                               $result['picgame']; ?>"class="card-img-top" alt="...">
                    
                          <div class="card-body">
                               <h5  class="card-title"> <?php  echo $result['gameName']  ?>   <br>
                               </h5> 
   <!-- GET ค่า gameID ไป set3                       -->
                           <a href="showitem.php?gameID=<?php echo $result['gameID']    ?>">ค้นหา</a> 
                    
                         </div>
                         </div>
                     </div>
 

                     <?php
                     } //End while loop
                }// End if
    
                ?>

             </div>
               

    
<!-- ***********************************************************************************************************
                                                หน้า page -->
    
                                                
        <nav aria-label="Page navigation example">
            <ul class="pagination d-flex justify-content-end">
                <?php 
                    if ($n>1){                                      //  ปุ่มย้อนกลับ
                        echo  
                        "<li class='page-item'>
                            <a class='page-link' href='showgame.php?typeID=$typeID&n=". ($n-1) ."'>Previous</a>
                        </li>";
                    }else{
                        echo 
                        "<li class='page-item'>
                            <a class='page-link' href='showgame.php?typeID=$typeID&n=1'>Previous</a>
                        </li>";
                    } 
                    $i=1;
                    while($i<=$numPages){              //  สร้างปุ่มทั้งหมด
                    echo 
                        "<li class='page-item'>
                            <a class='page-link' href='showgame.php?typeID=$typeID&n=".$i."'>". $i. "</a>
                        </li>";  
                        $i++;
                    }                             
                    if ($n<$numPages){                             //เพิ่มทีละหน้า
                        echo 
                            "<li class='page-item'>
                                <a class='page-link' href='showgame.php?typeID=$typeID&n=".  ($n+1) ."'>Next</a>
                            </li>";
                    }else{
                       echo                                   //     หน้าสุดท้าย
                            "<li class='page-item'>
                                <a class='page-link' href='showgame.php?typeID=$typeID&n=".$numPages  ."'>Next</a>
                            </li>";
                           
                            // <a href="index.php?title=abc&price=1000">ส่งค่า 2 ค่า</a>
                            // ต้องส่งค่า n กับ typeID ไปให้ได้ถึงจะค้นหาเจอ
                              
                    }
                ?>
            </ul>
        </nav>
<!-- 
        ************************************************* page  ************* -->

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
                        
                        