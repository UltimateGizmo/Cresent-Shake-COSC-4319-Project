<?php


session_start();
include("connection.php");
include("functions.php");
    

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        if(!empty($username) && !empty($email) && !empty($password))
        {
            $user_id = random_num(20);
            $query = "INSERT into register(user_id, username, email, password) values('$user_id','$username','$email','$password')";
            mysqli_query($con, $query);

            header("Location: index.php");
            die;
        }
        else
        {
            echo("please enter valid information.");
        }
    }

    //if( ! $terms){
     //   die("terms must be accepted");
    //}

    //Database Connection
    //MAMP origanal preference C:\MAMP\htdocs

    /*$conn = new mysqli('localhost', 'root', 'root', 'CrecentShakeDataBase' );
    if($conn->connect_error){
        die('Connection Failed : '. $conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into register(username, email, password) values(?,?,?)");
        $stmt->bind_param("sss",$username, $email, $password);
        $stmt->execute();
        echo "Registration Sucessfully";///MUST FORWARD TO HOME PAGE
        $stmt->close();
        $conn->close();
    }*/
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, 
        initial-scale=1.0"/>
        <title>CrecentShake</title>
        <link rel="stylesheet" href="styles_sign_up.css"/>
    </head>
    <body>
        <div class ="sign_up_box">
        <img src="DAvatar.jpg" class="avatar">
            <h1>Sign Up</h1>
            <form action="sign_up.php"  method="post">
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter Username">
                <p>Email</p>
                <input type="text" name="email" placeholder="Enter Email">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Password">
                <p>Confirm Password</p>
                <input type="password" name="" placeholder="Confirm Password">
                <label >
                    <input type="checkbox" name="terms">I agree to terms and conditions
                </label>
                <input type="submit" value="Sign Up"><!--BE SURE WHEN PRESSED IT TAKES YOU TO LOG IN PAGE-->
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
                        <a href="Home.html" class="navbar__links">Home</a>
                    <li class="navbar__btn">
                        <a href="index.php" class="button">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </body>
</html>

