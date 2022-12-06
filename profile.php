<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang ="en" dir="ltr">
        <head>
            
            <head>
                <body>
                    
                <div class="header_wrapper">
                    <header></header>
                    <div class="cols_container">
                        <div class="left_col">
                            <div class="img_container">
                                <img src="partypic.jpg" alt="Anna Smith">
                                <span></span>
                            </div>
                            <h2>Sarah Smith</h2>
                            <p>Interior Designer</p>
                            <p>SarahS@gmail.com</p>

                            <ul class="about">
                                <li><span>159</span>Follwers  |</li>
                                <li><span>372</span>|  Following  |</li>
                                <li><span>522</span>|  Likes</li>
                            </ul>
                            
                            <div class="content">
                                <p>
                                    Hey! Welocme to my page....
                                </p>
                            </div>
                        </div>

                        <div class="right_col">
                            <nav>
                                <ul>
                                    <li><a href="a">photos</a></li>
                                    <li><a href="a">recipes</a></li>
                                    <li><a href="a">about</a></li>
                                    <li><a href="Home.php">home</a></li> 
                                </ul>
                                <button>Follow</button>
                            </nav>
                            <div class="photos">
                                <img src="dr1.jpg" alt="photo">
                                <img src="dr2.jpg" alt="photo">
                                <img src="dr3.jpg" alt="photo">      
                            </div>
                        </div>
                    </div>
                </div>
            </body>
        </head>
    </html>
                   
    <head>
        <meta charset="utf-8">
        <title>Sidebar Menu with sub-menu</title>
        <link rel="stylesheet" href="profile.css">
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>
        <nav class="sidebar">
            <div class="text">Menu</div>
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li>
                    <a href="#" class="feat-btn">Quick Drinks  
                        <span class="fas fa-caret-down"></span>
                    </a>
                    <ul class="feat-show">
                        <li><a href="#">Tequila</a></li>
                        <li><a href="#">Vodka</a></li> 
                        <li><a href="#">Whisky</a></li>
                        <li><a href="#">Rum</a></li>     
                        <li><a href="#">Gin</a></li>                    
                    </ul>
                </li>
                <li>
                    <a href="popular.html" class="serv-btn">Popular
                    </a>
                    <ul>
                   
                    </ul class="serv-show">
                </li>

                <li><a href="file:///C:/Users/ashev/OneDrive/Desktop/SE/profile.html">Profile</a></li>
                <li><a href="#">Sign Out</a></li>      
            </ul>
        </li>
        </nav>
        <script>
            $('.btn').click(function(){
                $(this).toggleClass("click");
                $('.sidebar').toggleClass("show");
            });
            $('.feat-btn').click(function(){
                $('nav ul .feat-show').toggleClass("show");
                $('nav ul .first').toggleClass("rotate");
            });
            $('.serv-btn').click(function(){
                $('nav ul .serv-show').toggleClass("show1");
                $('nav ul .second').toggleClass("rotate");
            });
            $('nav ul li').click(function(){
                $(this).addClass("active").siblings().removeClass("active");
            });
        </script>

    </body>
        <meta charset ="utf-8">
        <title>Layout 1</title>
        <link href="profile.css" rel="stylesheet" type="text/css">
        <style type = "text/css">
  
        *
        {
            margin:0px;
            padding:0px;
            box-sizing:border-box;
            font-family: garamond;   
            font-size: 17px;  
        }



            
                
               