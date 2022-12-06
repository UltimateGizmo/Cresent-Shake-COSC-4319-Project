<?php
if(empty($_SESSION)){
    session_start();
}
include("connection.php");
include("functions.php");

    $sql = 'SELECT title FROM drink ORDER BY title';

    $result = mysqli_query($con, $sql);

    //fetch the resulting rows as an array

    $drinks = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_close($con);

    //print_r($drinks);
?>

<!DOCTYPE html>
<html lang ="en" dir="ltr">
        <head>
            <head>
                <meta charset="utf-8">
                <title>Sidebar Menu with sub-menu</title>
                <link rel="stylesheet" href="stylesh.css">
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
                                <li><a href="Tequila.html">Tequila</a></li>
                                <li><a href="Vodka.html">Vodka</a></li> 
                                <li><a href="Whisky.html">Whisky</a></li>
                                <li><a href="Rum.html">Rum</a></li>     
                                <li><a href="Gin.html">Gin</a></li>              
                            </ul>
                        </li>
                        <li>
                            <a href="popular.html" class="serv-btn">Popular               
                            </a>
                            <ul>
                           
                            </ul class="serv-show">
                        </li>

                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="sign_out.php">Sign Out</a></li><!--BE SURE TO USE PHP TO LOG OUT-->    
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
                <link href="Stylesh.css" rel="stylesheet" type="text/css">
                <style type = "text/css">
                *
                {
                    margin:0px;
                    padding:0px;
                    box-sizing:border-box;
                    font-family: garamond;   
                    font-size: 17px;  
                }

                #logo-div
                {
                    width:100%;
                    min-height:50px;
                    background-color: lightgrey;
                    padding-left:2%;
                    line-height:50px;
                    margin-bottom:10px;
                    background:url(sizzle.jpg); 
                    background-size: cover;
                    background-position: center;
                }

                #nav-div
                {
                    width:100%;
                    min-height:30px;
                    background-color: lightgray;
                    text-align:center;
                    line-height:30px;
                    margin-bottom:10px;
                }

                #header-banner-div
                {
                    width:100%;
                    min-height:100px;
                    background-color:lightgray;
                    text-align:center;
                    line-height:100px;
                    margin-bottom:10 px;

                }

                #main-div
                {
                    width:100%; 
                    margin-bottom:10px;
                    
                }

                #bodyarea-div
                {
                    width:100%;
                    min-height:700px;
                    background-color:lightgray;  
                    float:right;                 
                    text-align:center;
                    
                }

                .clearfix::after
                {
                   content:"";
                   display:block;
                   clear:both; 
                }

                #wrapper-div
                {
                    width:100%;
                    background-color:black;
                    margin:auto;
                }
                </style>
            <body>

<div id="wrapper-div">     
    
    
            <div id="logo-div">              
                <h2>Crescent Shake</h2>         
                <div class="container1">               
                <button class="btn1 btn12">Login</button>
                <img class="pic" img src="Neonmoon.png"> 
                </div>               
            </div> 

            <div id="nav-div">
                 <head>
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title></title>
                    <link rel="stylesheet" href="style.css"> 
                </head>
                <body>
                    <div class="container">
                        <form>
                            <input type="text" placeholder="    Add ingredients here...">
                            <button type="submit">Search</button>
                        </form>
                         
                    </div>
                </body>
            </div>

            <div id ="header-banner-div">   
            </div>
                <div id="bodyarea-div"> 
                    <div class="content1" id="content1"> Welcome, to Crescent Shake and drink responsibly! </div>
                    <div class="content2" id="content2"> 1. Search for ingredients  </div>
                    <div class="content3" id="content3"> 2. See what you can make </div>
                    <div class="content4" id="content4"> Our website allows you to search for specific ingredients that you may have laying around and drinks with those ingredients will be shown. If you sign up you get access to sharing your own creations and getting involved in the Crescent Shake community!  </div>
                </div>

                <div class = "container">
                    <div class = "row">
                        <?php foreach($drinks as $drink){ ?>
                         <div classes = "col s6 md3">
                            <div class = "card z-depth-0">
                                <div class = "card-content center">
                                    <h6><?php echo htmlspecialchars($drink['title']); ?></h6>
                                    <div><?php echo htmlspecialchars($drink['liquor']); ?></div>
                                    <div><?php echo htmlspecialchars($drink['volume']); ?></div>
                                    <div><?php echo htmlspecialchars($drink['rating']); ?></div>
                                </div>
                                <div class = "card-action right-alightn">
                                    <a class ="brand-text" href="#">more info</a>
                                </div>
                            </div>
                         </div>
                         <?php } ?>
                    </div>
                </div>

                <div class="tagline">
                    <div class="background-image"></div>
                <body>
                   

                    <style>
                        *{
                            margin: 0;
                            padding: 0;
                        }
                        
                        
                        .background-image{
                            background-image: url(cool.jpeg);
                            background-size: contain;
                            background-repeat: no-repeat;
                            margin-left: 301px;
                            height:200vh;
                            margin-top: -13.5vh;
                            margin-left: 33.5vh;
                                                                        
                        }
                    
                    </style>
                </body>
                </div>
            </div>
        </div>
    </body>
    </div>   
</div>   
        </body>
</html>