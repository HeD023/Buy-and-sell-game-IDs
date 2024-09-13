<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>S M B Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <div class="container">



        <h1>⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀</h1>
        
        <h1>โพสต์ขาย ID</h1>
       
        <div class="container">

            <form class="row g-3 registration" id="registration">
                <h1 class="topic"></h1>

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
                    <br>
                    <p>กรุณากดยืนยันประเภทเกมก่อน </p>
                    <select name="gameSelection" id="gameSelection" mt-1></select>
                    <!-- <button type="submitt" class="btn btn-primary">ประเภท</button> -->
                </div>


                <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Details</label>
                    <textarea name="details" id="details" cols="30" rows="5" class="form-control"></textarea>

                </div>
                <div class="col-md-6 mb-2">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price">
                    <h6>⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀</h6>
                    <label for="formFile" class="form-label">PicItem</label>
                    <input class="form-control" type="file" id="formFile" name="picfile">
                </div>
                <!-- <div class="col-md-12 mb-3">
                <label for="province" class="form-label">Province</label>
                <select id="province" class="form-control" name="province">
                    <option value="Surat Thani" selected>Surat Thani</option>
                    <option value="Bangkok">Bangkok</option>
                </select>
            </div> -->

                <div align="right">

                    <button type="submit" class="btn btn-primary right" id="buttonConfirm">Confirm</button>

                </div>

                <p class="error mt-3" id="error"></p>
            </form>



            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
                crossorigin="anonymous">
            </script>

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $.ajax({
        type: "GET",
        url: "query_follow_type.php?typegame=" + $("#typegame").val(),
        success: function(data) {
            $("#gameSelection").html(data);
        }
    });

    $("#submitBtn").click(function() {
        $.ajax({
            type: "GET",
            url: "query_follow_type.php?typegame=" + $("#typegame").val(),
            success: function(data) {
                $("#gameSelection").html(data);
            }
        });

    });
    $("#buttonConfirm").click(function() {
        // var formData = $(this).serialize();
        const details = document.getElementById("details");
        const price = document.getElementById("price");
        const gameID = document.getElementById("gameSelection");
        
        $.ajax({
            type: "POST",
            url: "add_member.php",
            data: {details:details.value,price:price.value,gameID:gameID.value},
            success: function(data) {
             window.location="http://localhost/total_p/profile.php"
            }
        });
    })
});
</script>

</html>