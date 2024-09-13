<?php
  session_start();
 include("config/db.php");
// echo $_SESSION['user_login'];

 if( isset($_POST["gameID"]) and isset($_POST["details"]) and isset($_POST["price"])) {
   
   $gameID = $_POST["gameID"];
   $memberID = $_SESSION['user_login'];
   $details = $_POST["details"];
   $price = $_POST["price"];

   $stmt = $conn->prepare("INSERT INTO `form`( `gameID`, `memberID`, `details`, `price`) VALUES (:gameID, :memberID, :details, :price)"); 
   $stmt->bindParam(':gameID', $gameID); 
   $stmt->bindParam(':memberID', $memberID); 
   $stmt->bindParam(':details', $details);
   $stmt->bindParam(':price', $price);

   $stmt->execute();
}
 
?>