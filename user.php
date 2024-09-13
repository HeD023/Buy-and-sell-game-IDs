<?php 
    session_start();
    require_once 'config/db.php';
    
    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: signin.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S M B Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="stylemax.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><i class="bi bi-controller"></i> S M B SHOP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="main.php">ข่าวสาร</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active " aria-current="page" href="showtype.php">เกมส์</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-danger" aria-current="page" href="profile.php">โปรไฟล์</a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>


    <div class="container">
        <?php 
            if (isset($_SESSION['user_login'])) {
                $user_id = $_SESSION['user_login'];
                $stmt = $conn->prepare("SELECT * FROM users WHERE id = :id");
                $stmt->bindParam(':id', $user_id, PDO::PARAM_INT);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($row) {
                    echo '<h3 class="mt-4">ยินดีต้อนรับคุณ ' . htmlspecialchars($row['firstname']) . ' ' . htmlspecialchars($row['lastname']) . '</h3>';
                } else {
                    echo '<h3 class="mt-4 text-danger">ไม่พบข้อมูลผู้ใช้</h3>';
                }
            }
        ?>
        <center><img src="img/smb.png" alt="S M B Shop" height="600" width="600"></center>
        <h1>⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀</h1>
        <div class="ms-auto">
            <a href="logout.php" class="btn btn-danger">Logout</a>
            <a href="profile.php" class="btn btn-danger">โปรไฟล์</a>
        </div>
    </div>
    <?php include 'footer.html'; ?>
</body>
</html>
