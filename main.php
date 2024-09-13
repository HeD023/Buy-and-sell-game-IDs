<?php

include 'connectDB.php';
 
  $sql = "SELECT header,paragrap,picnew FROM news  ";
  $rs = $con->query($sql);
   $count_row = mysqli_num_rows($rs);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />

    <title>S M B Shop</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>     

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include 'navbar.php'; ?>  
        
        <h1 class="main">ข่าวทั้งหมด</h1>
        
       
           <div class="myhero">
            <div id="carouselExampleFade" class="carousel slide carousel-fade">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://www.gamemonday.com/wp-content/uploads/2023/03/top-game-05-03-23.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://assets.beartai.com/uploads/2023/03/fortnite-chapter-4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://www.gamemonday.com/wp-content/uploads/2019/05/%E0%B9%84%E0%B8%BA%E0%B8%AE%E0%B9%84%E0%B8%A5%E0%B8%97%E0%B9%8C%E0%B8%82%E0%B9%88%E0%B8%B2%E0%B8%A7%E0%B9%80%E0%B8%81%E0%B8%A1-2652019.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
        </div>

        <div class="new">
          <button class="btn btn-dark" type="button">Rov</button>
          <button class="btn btn-dark" type="button">Free Frie</button>
          <button class="btn btn-dark" type="button">Valorant</button>
          <button class="btn btn-dark" type="button">Minecraft</button>
          <button class="btn btn-dark" type="button">ข่าวอื่นๆ</button>
        
      </div>

      
        <div class="container">
          <div class="row">     
            
          <?php 
        //5. check if found data from database
        if ($count_row > 0) {
        // echo "Found";
        //6. Read data each row
        while ($result = $rs->fetch_assoc()) {

    ?>
          
          <div class="col-md-4">
            <div class="card" style="width: 23rem;">
              <img src="image/picnew/<?php  echo $result['picnew'] ?>" class="img-thumbnail alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php  echo $result['header'] ?></h5>
                <div data-v-31387ece="" class="d-flex flex-column justify-content-between base-card-content-bottom h-50">
                  <p data-v-31387ece="" class="base-card-content-intro mb-0"><?php  echo $result['paragrap'] ?></p>
                  </div>
                </div>
              </div>
              <!----><!---->       
              <br>  
          </div>
          <?php

}
}
?> 
      </div>
</div>

    <h2 class="mainrong">ข่าวอื่นๆ</h2>
    
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="card" style="width: 17rem;">
            <img src="https://img.4gamers.com.tw/news-image/c0e22221-f4ff-45f9-9d3e-dfa0b1520bac.jpg" class="img-thumbnail alt="...">
            <div class="card-body">
              <h5 class="card-title">Genshin Impact อาวุธใหม่ Mailed Flower จากกิจกรรมเวอร์ชั่น 3.5 หนึ่งในของดีที่ต้องเก็บสะสม</h5>
              <div data-v-31387ece="" class="d-flex flex-column justify-content-between base-card-content-bottom h-50">
                <p data-v-31387ece="" class="base-card-content-intro mb-0">ของโคตรดี</p>
                </div>
              </div>
            </div>
            <!----><!---->
          </div>
      
          
        <div class="col-md-3">
          <div class="card" style="width: 17rem;">
            <img src="https://img.4gamers.com.tw/news-image/71b5b63b-5edd-45cd-b747-100c0ad7a498.jpg" class="img-thumbnail alt="...">
            <div class="card-body">
              <h5 class="card-title">Diablo 4 เปิดเผยความต้องการขั้นต่ําและความต้องการของระบบที่แนะนําสำหรับ PC  </h5>
              <div data-v-31387ece="" class="d-flex flex-column justify-content-between base-card-content-bottom h-55">
              <p data-v-31387ece="" class="base-card-content-intro mb-0">ด้วยการเปิดตัว Open beta ของ Diablo 4..</p>
              </div>
            </div>
          </div>
          <!----><!---->
        </div> 
          
           
        <div class="col-md-3">
          <div class="card" style="width: 17rem;">
            <img src="https://img.4gamers.com.tw/news-image/2998d4a5-e0c8-41c3-88c4-a7b93fb5ea7f.jpg" class="img-thumbnail alt="...">
            <div class="card-body">
              <h5 class="card-title">WWE 2K23 เผยเรตติ้งของ The Rock, The Undertaker และ Triple H</h5>
              <div data-v-31387ece="" class="d-flex flex-column justify-content-between base-card-content-bottom h-50">
              <p data-v-31387ece="" class="base-card-content-intro mb-0">WWE2K23 เผยเรตติ้งนักมวยปล้ำในตำนานอย่าง..</p>
 
              </div>
            </div>
          </div>
          <!----><!---->
        </div> 
      


        <div class="col-md-3">
          <div class="card" style="width: 17rem;">
            <img src="https://img.4gamers.com.tw/news-image/53256344-c5ee-4b3c-8ac6-dd1a4c1e449f.jpg" class="img-thumbnail alt="...">
            <div class="card-body">
              <h5 class="card-title">Tower of Fantasy เปิดตัวซิมูลาครัมคนใหม่สุดแสนจะน่ารัก Fenrir ที่จะทำให้เมนธาตุสายฟ้าต้องออกตามหา และเตรียมเข้าสู่เกม วันที่ 8 มีนาคม</h5>
              <div data-v-31387ece="" class="d-flex flex-column justify-content-between base-card-content-bottom h-50">
              <p data-v-31387ece="" class="base-card-content-intro mb-0">ความน่ารักที่มาพร้อมความสามารถสุดแกร่ง</p>
              </div>
            </div>
          </div>
          <!----><!---->
        </div> 
    </div>
    <?php include 'footer.html'; ?>
  
  
              <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
      integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
      integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
      crossorigin="anonymous"
    ></script>

</body>
</html>