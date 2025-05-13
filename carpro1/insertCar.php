<?php 
    include('config.php');
    session_start();

    if(isset($_POST))
        {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
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
        #------------------------------------------------------------> Insert query
        $insert = "INSERT INTO cars (NAME, PRICE, DESCRIPTION, IMG1, IMG2, IMG3) VALUES ('$name','$price','$description','$image_up1','$image_up2','$image_up3')";
        mysqli_query($con, $insert);
        header('location: cars.php');
        }


?>