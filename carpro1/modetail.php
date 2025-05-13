<!DOCTYPE html>
<html lang="en">
<?php
    include('config.php');
    session_start();
    $selected_car = $_POST['SELECTED'];
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="detail_style.css">
    <title>See More About <?php echo $selected_car?></title>
</head>

<body>
    <?php
    // include("config.php");
    // session_start();
    // $selected_car = $_POST['SELECTED'];
    $result = mysqli_query($con, "SELECT * FROM cars where NAME = '$selected_car'");
    while($row = mysqli_fetch_array($result))
    {
        echo "
        <div class='card'>
        <div class='text'>
            <h2>$row[NAME]</h2>
            <h3>$row[PRICE]</h3>
            <p>$row[DESCRIPTION]</p>
            <a class='a1' href='../carpro1/front17/card.php'>buy</a>
        </div>
        <div class='img'>
            <img src='$row[IMG1]' alt=''>
            <div class='card2'>
                <img src='$row[IMG2]' alt=''>
                <img src='$row[IMG3]' alt=''>
            </div>
        </div>
        </div>
        ";
    }
    ?>
</body>

</html>