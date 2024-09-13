<?php
include("config/db.php");

if(isset($_GET["typegame"])){
    $typeID = $_GET["typegame"];
    $stmt = $conn->prepare("SELECT * FROM game WHERE typeID = :typeID");
    $stmt->bindParam(':typeID', $typeID);
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<option value='" . $row["gameID"] . "'>" . $row["gameName"] . "</option>";
        // echo $row["gameName"];
    }
}
?>