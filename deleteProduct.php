<?php
include 'connectDB.php';

if (isset($_GET['productID'])) {
    $productID = $_GET['productID'];

    $sql = "DELETE FROM form WHERE productID = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $productID);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header("Location: showproductsPagination.php");
        exit();
    } else {
        echo "No product found with the given ID";
    }
} else {
    echo "No product ID provided";
}
?>