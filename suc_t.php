<?php
//to force the errors
ini_set("display_errors", "1");
ini_set("display_startup_errors", "1");
error_reporting(E_ALL);

if(empty($_SESSION)){
    session_start();
}
include("connection.php");
include("Functions.php");
$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>My website</title>
    </head>
    <body>
        <a href="sign_out.php"> logout</a>
        <h1> This is the fix it page</h1>

        <br>
        Hello,<?php echo $user_data['username']; ?>
    </body>
</html>