<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Dashboard/ONLINEE2.css">
    <title>Edit a Car | التعديل على سيارة</title>
</head>

<body>
    <?php
    include("config.php");
    $id = $_GET['id'];
    $up = mysqli_query($con, "SELECT * FROM cars WHERE ID = $id");
    $data = mysqli_fetch_array($up);
    ?>
    <div class="shop">
        <h3> Edit Car </h3>
        <form action="up.php" method="post" enctype="multipart/form-data">
            <input type="number" name="id" readonly placeholder="id" value='<?php echo $data['ID']?>'>
            <br>
            <input type="text" name="name" placeholder="Name" value='<?php echo $data['NAME']?>'>
            <br>
            <input type="number" name="price" placeholder="Price" value='<?php echo $data['PRICE']?>'>
            <br>
            <input type="text" name="description" placeholder="description" value='<?php echo $data['DESCRIPTION']?>'>
            <br>
            <div class="f">
                <input type="file" id="file1" value='<?php echo $data['IMG1']?>' name="img1">
                <label for="file1" required value="Choose image for product">img1</label>
                <input type="file" id="file2" value='<?php echo $data['IMG2']?>' name="img2">
                <label for="file2" required value="Choose image for product">img2</label>
                <input type="file" id="file3" value='<?php echo $data['IMG3']?>' name="img3">
                <label for="file3" required value="Choose image for product">img3</label>
            </div>
            <button name="update">Update Product</button>
            <br>
            <a href="#" target="_blank">Show All Products</a>
        </form>
    </div>
</body>

</html>