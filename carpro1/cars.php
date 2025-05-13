<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cars.css">
    <script src="https://kit.fontawesome.com/a8dea6e7c3.js" crossorigin="anonymous"></script>
    <title>All Cars</title>
</head>


<body>
    <header>
        <nav class="navt">
            <h1 class="h">CA<span class="g">R</span></h1>
            <ul>
                <li><a href="home.php">home</a></li>
                <li><a href="addCar.php">insert car</a></li>
                <li><a href="#co">contact me</a></li>
                <!-- <li><a class="log" href="../carpro1/Login3/Login.html">login</a></li> -->
            </ul>
        </nav>
    </header>
    <?php 
    include('config.php');
    session_start();
    $result = mysqli_query($con, "SELECT * FROM cars");
    echo "
    <section class='ab' id = 'add'>
        <div class='con-ser'>
    ";
    while($row = mysqli_fetch_array($result))
    {
        echo "
            <form method='post' action='EditCar.php'>
                <div class='card'>
                    <h2>$row[NAME]</h2>
                    <img src='$row[IMG1]' alt=''>
                    <h5>$row[PRICE] EGP</h5>
                        <p>
                        $row[DESCRIPTION]
                        </p>
                    <div class='li'>
                    <a class='btn_edit' href='EditCar.php? id=$row[ID]' >Edit Car</a>
                    <input type='hidden' name='SELECTED' id='' value='$row[NAME]'>
                      
                    <a class='btn_delete' href='delete.php? id=$row[ID]' name='DELETE' value='Delete'> Delete</a>         
                    </div>
                </div>
            </form>
        ";
        // $selected_car = array($row['NAME']);  <a class='a2' href='modetail.php'>see more</a>
        //<input class='btn_delete' href='delete.php? id=$row[ID]' type='submit' name='DELETE' value='Delete' >
    }


    echo "
        </section>
    </div>
    ";
    ?>
    <!-- ---------------------------------------------------------- -->
    <section class="contact" id="co">
        <div class="left">
            <h2> Lorem ipsum dolor sit amet.</h2>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt optio rerum quis, dolores deleniti
                laborum. Quia doloremque error optio beatae.
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