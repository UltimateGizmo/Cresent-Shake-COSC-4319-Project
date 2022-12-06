<?php
if(empty($_SESSION)){
    session_start();
}

include("connection.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if(!empty($username) && !empty($password))
    {
        //read from database
        $query = "SELECT * from register where username = '$username' limit 1";
        
        $result = mysqli_query($con, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password'] == $password)
                {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: Home.php");
                    die;
                }
            }
        }
    }
    else
    {
        echo("Wrong username or password!");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, 
        initial-scale=1.0"/>
        <title>CrecentShake</title>
        <link rel="stylesheet" href="styles.css"/>
    </head>
    <body>
        <div class ="loginbox">
        <img src="DAvatar.jpg" class="avatar">
            <h1>Login Here</h1>
            <form action="index.php"  method="post">
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Password">
                <input type="submit" value="Login">
                <a href="#">Forgot password?</a>
            </form>
        </div>
        <nav class="navbar">
            <div class="navbar__container">
                <a id="navbar__logo">Crecent Shake</a>
                <div class="navbar__toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="navbar__menu">
                    <li class="navbar__item">
                        <a href="Home.php" class="navbar__links">Home</a>
                    <li class="navbar__btn">
                        <a href="sign_up.php" class="button">Sign Up</a> 
                    </li>
                </ul>
            </div>
        </nav>
    </body>
</html>