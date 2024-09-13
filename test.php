<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S M B Shop</title>
</head>

<body>
    <div>
        <select name="typegame" id="typegame">

            <?php
            include("config/db.php");
            $sql = "SELECT * FROM typegame";
            $rerult = $conn->query($sql);
            while ($row = $rerult->fetch()) {
                echo "<option value='" . $row["typeID"] . "'>" . $row["typeName"] . "</option>";
            }
            ?>
        </select>
        <button type="button" class="btn btn-primary" id="submitBtn">ยืนยันประเภทเกม</button>
    </div>
    <div>
        <select name="gameSelection" id="gameSelection">
        </select>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function(){
        $("#submitBtn").click(function(){
            $.ajax({
                type: "GET",
                url: "query_follow_type.php?typegame="+$("#typegame").val(),
                success: function(data){
                    $("#gameSelection").html(data);
                }
            });
        });
    });
    </script>
</html>

