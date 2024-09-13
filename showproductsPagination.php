<?php
session_start();
if (isset($_SESSION['admin_login'])) {
//1.Connect DB (MySQL)
include 'connectDB.php';

//2. Generate SQL Statement
$sql_all = "SELECT * FROM form  where productID = productID ";

//3. Send sql statement to MySQL
$rs_all = $con->query($sql_all);


//4. Count number of rows from query result
$count_row = mysqli_num_rows($rs_all);

if(isset($_GET['n'])){
    $n = $_GET['n'];
}else{
    $n=1;
}
$itemsPerPage = 10;
$numPages = ceil($count_row/$itemsPerPage);

$start =($n - 1) * $itemsPerPage;
//2. Generate SQL Statement
$sql = "SELECT * FROM form  ";
//3. Send sql statement to MySQL
$rs = $con->query($sql);

//4. Count number of rows from query result
$count_row = mysqli_num_rows($rs);
//echo $count_row;
?>
<!DOCTYPE html>
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
    <link rel="stylesheet" href="style.css">
   
</head>

<body>
  <?php include 'head.html'; ?>
    <div class="container spaceContainer">
        <div class="d-flex justify-content-between mt-3 align-items-center">
            <div class="">
                <h1>ข้อมูลสินค้า</h1>
            </div>

        </div>

        <div class="d-flex justify-content-between mt-3">
            <form class="d-flex">
                <div class="me-4">
                    <label for=" product" class="form-label">Product Search :</label>
                </div>
                <div class="me-4">
                    <input type="text" class="form-control" id="product" placeholder="Product Keyword">
                </div>
                <div class="me-4">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
            
        </div>
        <div class="row mt-3">
            <div class="col-lg-12">
                <table class="table table-bordered" id="productTable">
                    <thead>
                        <tr class="table-primary">
                            <th scope=" col">ProductID</th>
                            <th scope="col">GameID
                            </th>
                            <th scope="col">MemberID</th>
                            <th scope="col">Details</th>
                            <th scope="col">Price</th>
                            <th scope="col">Pictiem</th>
                           
                           
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                       <?php
                        //5. check if found data from database
                      if ($count_row > 0) {
                            // echo "Found";
                            //6. Read data each row
                            while ($result = $rs->fetch_assoc()) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $result['productID']; ?></th>
                            <td><?php echo $result['gameID']; ?></td>
                            <td><?php echo $result['memberID']; ?></td>

                            <td><?php echo $result['details']; ?></td>
                            <td><?php echo $result['price']; ?></td>


                            <td scope="col"><img  src="image/picitem/<?php echo $result['picitem']; ?>"
                                    class="picCart" alt  ="" width=650px height=350px>
                            </td>
                            
                            
                            <td>
                                <a class="btn btn-danger"
                                    href="deleteProduct.php?productID=<?php echo $result['productID']; ?>" role="button"
                                    onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                            </td>
                            
                        </tr>
                        <?php
                            } //end while loop
                        } // end if
                        ?>

                    </tbody>
                </table>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination d-flex justify-content-end">
                    <?php 
                    if ($n>1){
                        echo 
                        "<li class='page-item'>
                            <a class='page-link' href='showproductsPagination.php?n=". ($n-1) ."'>Previous</a>
                        </li>";
                    }else{
                        echo 
                        "<li class='page-item'>
                            <a class='page-link' href='showproductsPagination.php?n=1'>Previous</a>
                        </li>";
                    } 
                    $i=1;
                    while($i<=$numPages){ 
                    echo 
                        "<li class='page-item'>
                            <a class='page-link' href='showproductsPagination.php?n=".$i."'>". $i. "</a>
                        </li>";  
                        $i++;
                    } 
                    if ($n<$numPages){   
                        echo 
                            "<li class='page-item'>
                                <a class='page-link' href='showproductsPagination.php?n=".  ($n+1) ."'>Next</a>
                            </li>";
                    }else{
                        echo
                            "<li class='page-item'>
                                <a class='page-link' href='showproductsPagination.php?n=".$numPages  ."'>Next</a>
                            </li>";
                    
                    }
                ?>
                </ul>
            </nav>
        </div>

    </div>
 
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
</body>
<footer>
<div class="container-fluid">
  <div class="row mt-5">
    <div class="col-md-12 text-center">
      
      <p class="para">
        เว็บไซต์นี้จัดทำขึ้นมาเพื่อตอบโจทย์การขายของลูกค้าที่มีความต้องการที่จะซื้อ-ขายเกม เว็บไวต์ที่มีความการันตีของผู้ขายเเละผู้ซื้อ <br>
        ช่องทางติดต่อด้านล่าง<br />Tel. 093-7899973
      </p>
      <h2 class="heading3 pt-2"><i class="bi bi-controller"></i> -----------------------------  S M B S H O P  ------------------------------- <i class="bi bi-controller"></i> </h2>
    </div>
  </div>
</div>
</footer>
</html>

<?php
}else{
  
}
?>