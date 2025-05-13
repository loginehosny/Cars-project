<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="drr.css">
    <script src="https://kit.fontawesome.com/a8dea6e7c3.js" crossorigin="anonymous"></script>
    <title>Home | الصفحة الرئيسية</title>
</head>
<?php
include('config.php');
session_start();

?>

<body>
    <header>
        <video autoplay loop muted plays-inline class="vid">
            <source src="../carpro1/car/output(video-cutter-js.com).mp4" type="video/mp4">
            <source src="../carpro1/car/output(video-cutter-js.com).ogg" type="video/ogg">
        </video>
        <nav>
            <h1 class="h">CA<span class="g">R</span></h1>
            <ul>
                <li><a href="#">home</a></li>
                <li><a href="#ab0">about</a></li>
                <li><a href="#pr">Cars</a></li>
                <!-- <li><a href="#ser">services</a></li> -->
                <li><a href="#co">contact me</a></li>
                <!-- <li><a class="log" href="../carpro1/Login3/Login.html">login</a></li> -->
            </ul>
        </nav>
        <div class="content">
            <div class="con">
                <h4>Brave, Strong, and Brave</h4>
                <h1>Turn Your Trip To Be Fun</h1>
                <div class="timezone">
                    <?php
    date_default_timezone_set('Africa/Cairo');
    print(date('Y/m/d'));
    print('      ');
    print(date("h:i a"));
    ?>
                </div>

            </div>
    </header>
    <!-- -------------------------------------------------------- -->

    </div>
    <section class="about" id="ab0">
        <div class="container">
            <h2 class="special-heading">about</h2>
            <p>We're here for you.</p>
            <div class="card">
                <img src="../carpro1/car/10-bmw-png-image-download.png" alt="">
                <div class="card-text">
                    <h2>What about our car showroom?</h2>
                    <p>A car is one of the most expensive purchases a person makes and today’s showroom has an important
                        role in helping customers make that decision.
                        In an increasingly segmented market, an outlet needs to cater for a range of clients and their
                        needs.
                        Dealers know that just as important as how the dealership looks, is how the dealership WORKS!
                    </p>
                </div>

            </div>
            <a href="#pr"><i class="fa-sharp fa-solid fa-angles-down"></i></a>
        </div>
    </section>
    <!-- --------------------------------------------------------- -->
    <?php 
    include('config.php');
    $result = mysqli_query($con, "SELECT * FROM cars ");
    // $selected_car = $_SESSION($row['NAME']);
    echo "
    <section class='ab' id = 'pr'>
        <div class='con-ser'>
    ";
    while($row = mysqli_fetch_array($result))
    {
        echo "
            <form method='post' action='modetail.php'>
                <div class='card'>
                    <h2>$row[NAME]</h2>
                    <img src='$row[IMG1]' alt=''>
                    <h5>$row[PRICE] EGP</h5>
                    
                        <p>
                        $row[DESCRIPTION]
                        </p>
                    
                    <div class='li'>
                    <a class='a1' href='../carpro1/front17/card.php'>buy</a>
                    <input type='hidden' name='SELECTED' id='' value='$row[NAME]'>
                    <input class='a3' type='submit' name='seemore' value='see more' >               
                    </div>
                </div>
            </form>
        ";
    }


    echo "
        </section>
    </div>
    ";
    ?>

    <!--     -->

    <!-- ---------------------------------------------------------- -->
    <section class="contact" id="co">
        <div class="left">
            <h2> A car is one of </h2>
            <p> the most expensive purchases a person makes and today’s showroom has an important
                role in helping customers make that decision.
                In an increasingly segmented market, an outlet needs to cater for a range of clients and their
                needs.
                Dealers know that just as important as how the dealership looks, is how the dealership WORKS!
            </p>
        </div>
        <div class="right">
            <input type="email" placeholder="enter your email...">
            <button>Get Started For Free</button>
        </div>
    </section>
    <!-- ---------------------------------------------------------- -->
    <footer>
        <h1>CA<span>R</span></h1>
        <div class="fot">
            <div class="fot1">
                <ul>
                    <li>
                        <div class="as">
                            <img src="../carpro1/car/icon-phone.svg" alt="">
                            <p>Phone: 0100000220</p>
                        </div>
                    </li>
                    <li>
                        <div class="as">
                            <img src="../carpro1/car/icon-email.svg" alt="">
                            <p>Web team@gmail.com</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="fot2">
                <ul>
                    <li>About Us</li>
                    <li>What We Do</li>
                    <li> FAQ</li>
                </ul>
            </div>
            <div class="fot3">
                <li>Career</li>
                <li>Blog</li>
                <li>Contact Us</li>
            </div>
            <div class="icon">
                <ul>
                    <li>
                        <a href="@"> <i class="fa-brands fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="@"> <i class="fa-brands fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="@"> <i class="fa-brands fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="end">
            © Copyright 2022 Web Team. All rights reserved.
        </div>
    </footer>
</body>

</html>