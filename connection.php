<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "CrecentShakeDataBase";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("Failed to connect to database!");
}