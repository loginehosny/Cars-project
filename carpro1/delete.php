<?php
    include('config.php');
    $id = $_GET['id'];
    mysqli_query($con, "DELETE FROM cars where ID = $id");
    header('location:cars.php');
?>