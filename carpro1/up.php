<?php
    include('config.php');

    if(isset($_POST['update']))
        {
        $ID = $_POST['id'];
        $NAME = $_POST['name'];
        $PRICE = $_POST['price'];
        $DESCRIPTION = $_POST['description'];
        #------------------------------------------------------------> first image
        $img1 = $_FILES['img1'];
        $image_location1 = $_FILES['img1']['tmp_name'];
        $image_name1 = $_FILES['img1']['name'];
        move_uploaded_file($image_location1, 'cars_img/' . $image_name1);
        $image_up1 = "cars_img/" . $image_name1;
        #------------------------------------------------------------> second image
        $img2 = $_FILES['img2'];
        $image_location2 = $_FILES['img2']['tmp_name'];
        $image_name2 = $_FILES['img2']['name'];
        move_uploaded_file($image_location2, 'cars_img/' . $image_name2);
        $image_up2 = "cars_img/" . $image_name2;
        #------------------------------------------------------------> third image
        $img3 = $_FILES['img3'];
        $image_location3 = $_FILES['img3']['tmp_name'];
        $image_name3 = $_FILES['img3']['name'];
        move_uploaded_file($image_location3, 'cars_img/' . $image_name3);
        $image_up3 = "cars_img/" . $image_name3;
        #------------------------------------------------------------> Update Query
        $update = "UPDATE cars SET NAME='$NAME', PRICE='$PRICE', DESCRIPTION='$DESCRIPTION',
        IMG1='$image_up1',IMG2='$image_up2', IMG3='$image_up3' WHERE ID = '$ID'";
        mysqli_query($con, $update);
        header('location: cars.php');
        }
?>