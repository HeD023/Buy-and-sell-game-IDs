<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "bms2";

    $con = new mysqli($host,$username,$password,$db);
    if ($con->connect_error)
    {
        die('Error : ('. $con->connect_errno .')'. $con->connect_error);
    }else{
        //  echo "Connect Database successfully!";
        
    }
    $con->set_charset("utf8"); //สนับสนุนภาษาไทย

    function checkUsernamePassword($con,$sql){
        
        $result = $con->query($sql);
        return $result;
  
    }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S M B Shop</title>
</head>
<body>
    
</body>
</html>