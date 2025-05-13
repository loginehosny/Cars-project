<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vs.css">
    <title>Login | تسجيل الدخول</title>
</head>

<?php
include('../config.php');
session_start();
$select = mysqli_query($con, 'SELECT * FROM users');
$selectA = mysqli_query($con, 'SELECT * FROM admin');
$rowA = mysqli_fetch_array($selectA);
// $usr = $_COOKIE['user'] = mysqli_query($con, 'SELECT Username FROM users');


if(isset($_GET['submit']))
    {
        $email = mysqli_real_escape_string($con, $_GET['email']);
        $pass = mysqli_real_escape_string($con, $_GET['password']);
        $sel = mysqli_query($con, "SELECT * FROM users WHERE EmailAddress = '$email' AND Password ='$pass'")
            or die('query failed');
        $selA = mysqli_query($con, "SELECT * FROM admin WHERE EmailAddress = '$email' AND Password ='$pass'")
        or die('query failed');
        if(empty($email) or empty($pass)){
                $message[] = '';
            }
        else if($email = $rowA['EmailAddress'] and $pass = $rowA['Password'])
        {
            header('location: ../cars.php');
        }

        if(mysqli_num_rows($sel) > 0)
            {
                $row = mysqli_fetch_assoc($select);
                $_SESSION['ID'] = $row['ID'];
                header('location: ../Home.php');
            }
            else
            {
                $message[] = 'incorrect password or email';
            }
    }


?>

<body>

    <main>
        <div class="img"><img src="../Login/img/illustration-flowing-conversation.svg" alt=""></div>
        <div class="form">
            <form>
                <h1>Login Panel</h1>
                <!-- <input type="text" name="user" value="<?php $usr ?>" hidden> -->
                <input type="text" class="lk" name="email" placeholder="Email Address">
                <br>
                <input type="password" class="mo" name="password" placeholder="Password">
                <br>
                <!-- <input id="ch" type="checkbox">
                <label for="ch">I agree to the <a href="@">terms and conditions</a></label> -->
                <label> <?php
                  if (isset($message)) {
                     foreach ($message as $message) {
                        echo '<div class="message" onclick="this.remove();">' . $message . '</div>';
                     }
                  }
                  ?></label>
                <br>
                <input type='hidden' name='user' id='' value=<?php echo $rowA['Username'] || $row['Username'];?>>
                <input type="submit" value="login" name="submit">
                <br>
                <hr>
                <a class="a" href="register.php">Register Now !</a>
            </form>
        </div>
    </main>

</body>

</html>