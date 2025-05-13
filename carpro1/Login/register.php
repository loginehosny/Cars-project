<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Register Form | تسجيل جديد</title>
</head>
<?php
    include('../config.php');
    if(isset($_POST['submit']))
        {
            $name = mysqli_real_escape_string($con, $_POST['name']);
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $pass = mysqli_real_escape_string($con, $_POST['Password']);
            $cpass = mysqli_real_escape_string($con, $_POST['cPassword']);
            $message = "";

            $select = mysqli_query($con, "SELECT * FROM users WHERE EmailAddress='$email'") or die('query failed');

            if(mysqli_num_rows($select) > 0)
            {
                $message = 'user already exist';
            }
            else if($pass != $cpass)
            {
            $mg = 'Password Not Matching';
            }
            else
            {
                mysqli_query($con, "INSERT INTO users (Username, EmailAddress, Password, cPassword) VALUES('$name','$email','$pass','$cpass')") or die('query failed');
                header('location: Login.php');
            }
        }

?>

<body>
    <div class="form">
        <form action="" method="post">
            <h1>Register</h1>
            <input type="text" class="lk" name="name" placeholder="Username" required>
            <br>
            <input type="email" name="email" class="input" placeholder="Email Address" required
                style="color:#6a6f8c !important;">
            <br>
            <input type="password" class="mo" name="Password" placeholder="Password" required>
            <br>
            <input type="password" class="input" name="cPassword" placeholder="Repeat Password" data-type="password"
                required style="color:#6a6f8c !important;">
            <br>
            <label><?php
                if (isset($mg)) {
                    echo '<div class="message" onclick="this.remove();">' . $mg . '</div>';
                    } ?></label>
            <input id="ch" type="checkbox">
            <label for="ch">I agree to the <a href="@">terms and conditions</a></label>
            <br>
            <label id='messagelabel'><?php
                if (isset($message)) {
                    echo '<div class="message" onclick="this.remove();">' . $message . '</div>';
                    } ?></label>
            <input class="submit" type="submit" name="submit" value="Sign Up">
            <br>
        </form>
    </div>
</body>

</html>