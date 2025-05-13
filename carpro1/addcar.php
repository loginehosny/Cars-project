<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="DashBoard/ONLINEE2.css">
    <title>Add Car | اضافه سيارة</title>
</head>

<body>
    <div class="shop">
        <h3>Add Car | اضافه سيارة</h3>
        <form action="insertCar.php" method="post" enctype="multipart/form-data">
            <img src="" alt="">
            <br>
            <input type="text" name="name" placeholder="Product Name">
            <br>
            <input type="text" name="price" placeholder="Price">
            <br>
            <input type="text" name="description" placeholder="Description">
            <br>
            <div class="f">
                <input type="file" id="file1" value="Choose image for product" name="img1">
                <label for="file1" required value="Choose image for product">img1</label>
                <input type="file" id="file2" value="Choose image for product" name="img2">
                <label for="file2" required value="Choose image for product">img2</label>
                <input type="file" id="file3" value="Choose image for product" name="img3">
                <label for="file3" required value="Choose image for product">img3</label>
            </div>
            <button name="upload">Upload Product</button>
            <br>
            <a href="cars.php">Show All Products</a>
        </form>
    </div>
</body>

</html>