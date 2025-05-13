<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PAYMENT | الدفع</title>
</head>

<?php
    include('../config.php');
    if(isset($_POST['submit']))
        {
            $name = mysqli_real_escape_string($con, $_POST['name']);
            $cNumber = mysqli_real_escape_string($con, $_POST['cnum']);
            $cMonthDATE = mysqli_real_escape_string($con, $_POST['cMDATE']);
            $cYearDATE = mysqli_real_escape_string($con, $_POST['cYDATE']);
            $cvcNum = mysqli_real_escape_string($con, $_POST['CVC']);
            $message = "";

            $select = mysqli_query($con, "SELECT * FROM card WHERE cNumber='$cNumber'") or die('query failed');

            if(mysqli_num_rows($select) > 0)
            {
            $message = 'this card is already exist';
            }
            else
            {
            mysqli_query($con, "INSERT INTO card (cName, cNumber, cMDATE, cYDATE, CVC) VALUES('$name','$cNumber','$cMonthDATE','$cYearDATE','$cvcNum')") or die('query failed');
            header('location: tcard.html');
            }
        }
?>

<body>
    <img src="../front17/images/bg-main-desktop.png" alt="" class="bg-main-desktop">
    <div class="cont">
        <section class="right">
            <div class="front-card">
                <img src="../front17/images/bg-card-front.png" alt="" class="bg-card-front">
                <img src="../front17/images/card-logo.svg" alt="" class="c card-logo">
                <p class="c car-num">0000 0000 0000 0000</p>
                <p class="c car-name">Cardholder Name</p>
                <p class="c car-year">00/00</p>
            </div>
            <div class="back-card">
                <img src="../front17/images/bg-card-back.png" alt="" class="bg-card-back">
                <p class="c ds">000</p>
            </div>
        </section>


        <!-- 
    

    000 -->
        <section class="card-form">
            <form action="" method="post">
                <label for="car">Cardholder Name</label>
                <input type="text" name="name" id="car" placeholder="e.g. Jane Appleseed" class="car_na">
                <br>
                <label for="num" class="a num">Card Number</label>
                <input type="text" id="num" name="cnum" placeholder="e.g. 1234 5678 9123 0000" class="car_na">
                <div class="df">
                    <div class="df1">
                        <label for="exp" class="a ex">Exp. Date (MM/YY)</label>
                        <input type="text" name="cMDATE" placeholder="MM" id="exp" class="m-exp">
                        <input type="text" name="cYDATE" placeholder="YY" id="exp" class="m-exp">
                    </div>
                    <div class="df2">
                        <label for="cvc" class="a cvc">CVC</label>
                        <input type="text" id="cvc" name="CVC" class=" fcvc" placeholder="e.g. 123">
                    </div>
                </div>
                <button type="submit" id="submit" name="submit">Confirm</button>
            </form>

        </section>



    </div>
</body>

</html>