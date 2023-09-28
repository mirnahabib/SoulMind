<?php
session_start();

 if(!isset($_SESSION["loggedin"]) ) {
    header("location: login.php");
    exit;
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> SoulMind </title>
    <meta charset="UTF-8">
    <div id="top" style="text-align: center;">
        <div class="title">
            <h1 style="font-size:70px; text-align: center ;font-family:Century Gothic ;color : #ff37b6; margin-top:5%; margin-left:5%; margin-right:5%"><b> SoulMind </b></h1>
        </div>
        <div class="title">
            <img src="logo.png" style="width:100px;height:100px; margin-bottom:2.5%" class="logo">
        </div>
    </div>
    
    <div class="topnav" style="margin-bottom: 2.5%">
        <a class="active" href="SoulMind.html">Home</a>
        <a href="about.html">About</a>
        <a href="contact.html">Contact</a>
        <a href="index.html">Account</a>
        <a href="logout.php">
            <button class="btn btn-outline-success" type="submit">Log Out</button>
          </a>
    </div>
</head>

<body>
    <h2 style="text-align: center; font-size:28px;font-family:Century Gothic ;color: #ff37b6;background-color:#ffffff;">
        <b>What is Self-Care?</b></h2>
    <p style="font-weight: bold; text-align: center; font-size:22px; font-family:Century Gothic ;color: #2823b5 ; margin: 2.5%;">
        Self-care is important to maintaining a healthy relationship with yourself. <br>
        It means doing things to take care of our minds, bodies, and souls by engaging in activities that promote
        well-being and reduce stress. <br>
        Doing so enhances our ability to live fully, vibrantly, and effectively.<br>
        The practice of self-care also reminds both you and others that your needs are valid and a priority.<br>
    </p>
    <h3 style="text-align: center; font-size:28px;font-family:Century Gothic ;color: #ff37b6;background-color:#F0F0F0">
        <b>EXAMPLES OF SELF-CARE</b></h3>
    <div class="list">
        <li>Clean</li>
        <li>Cook or bake</li>
        <li>Cross something off your to-do list</li>
        <li>Exercise</li>
        <li>Get a massage</li>
        <li>Go for a walk</li>
        <li>Listen to music or a podcast</li>
        <li>Make art</li>
        <li>Meditation</li>
        <li>Mindfulness exercises</li>
        <li>Play a game</li>
        <li>Practice deep breathing</li>
        <li>Read</li>
        <li>Take a bath</li>
        <li>Take a (timed) nap</li>
        <li>Watch TV or a movie</li>
        <li>Yoga</li>
    </div>
    <h4 style="text-align: center; font-size:22px;font-family:Century Gothic ;color: #ff37b6;background-color:#F0F0F0">
        <b>TYPES OF SELF-CARE</b></h4>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <script src="jquery.js"></script>
    <div class="row p-5" id="panel">
        <h1 class="display-3 text-center text-muted" id="not_find_any_thing"></h1>

        <div class="col-md-6 col-lg-3 mt-5">
            <div class="cards p-2">
                <img class="card-img-top" src="metime.jpeg" alt="">
                <div class="card-body">
                    <div class="d-flex justify-content-between">

                        <h5 class="card-title">Me Time</h5>

                    </div>
                    <p class="card-text" style="font-size:14px;">Pamper yourself and help your busy brain unplug and
                        unwind! </p>
                    <div class="d-flex justify-content-between">

                        <div class="bg-dark text-white text-center pl-2 pr-2 cart_btn"><a href="MeTime.html">See
                                More!</a></div>

                    </div>

                </div>

            </div>

        </div>


        <div class="col-md-6 col-lg-3 mt-5">
            <div class="cards p-2">
                <img class="card-img-top" src="wetime.jpg" alt="">
                <div class="card-body">
                    <div class="d-flex justify-content-between">

                        <h5 class="card-title">We Time</h5>

                    </div>
                    <p class="card-text" style="font-size:14px;">Pamper yourself with your loved ones!</p>
                    <div class="d-flex justify-content-between">

                        <div class="bg-dark text-white text-center pl-2 pr-2 cart_btn"><a href="WeTime.html">See
                                More!</a></div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-6 col-lg-3 mt-5">
            <div class="cards p-2">
                <img class="card-img-top" src="zentime.jpg" alt="">
                <div class="card-body">
                    <div class="d-flex justify-content-between">

                        <h5 class="card-title">Zen Time</h5>

                    </div>
                    <p class="card-text" style="font-size:14px;">Enhance your sense of calm, peace and balance!</p>
                    <div class="d-flex justify-content-between">

                        <div class="bg-dark text-white text-center pl-2 pr-2 cart_btn"><a href="ZenTime.html">See
                                More!</a></div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-6 col-lg-3 mt-5">
            <div class="cards p-2">
                <img class="card-img-top" src="arttime.jpg" alt="">
                <div class="card-body">
                    <div class="d-flex justify-content-between">

                        <h5 class="card-title">Art Time</h5>

                    </div>
                    <p class="card-text" style="font-size:14px;">Increase your creativity!</p>
                    <div class="d-flex justify-content-between">

                        <div class="bg-dark text-white text-center pl-2 pr-2 cart_btn"><a href="ArtTime.html">See
                                More!</a></div>

                    </div>

                </div>

            </div>

        </div>
    </div>



</body>
<style>
    div.list {
        text-align: center;
        font-size: 20px;
        font-weight: bold;
        font-family: Century Gothic;
        color:#2823b5;
        margin: 2.5%;

    }

    .cards {
        box-shadow: 0px 0px 17px -10px rgba(0, 0, 0, 0.75);
    }

    .cards:hover {
        cursor: pointer;
        box-shadow: 20px 20px 100px -50px #000;
        transition: 0.3s;
    }


    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }
    body {
    background-image: url("background.png");
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
title{
        display: inline-block;
    }

.firstdiv {
    text-align: center;
    color: white;
    width: 500px;
}
    


    .topnav {
        background-color: #2823b5;
        overflow: hidden;
    }

    /* Style the links inside the navigation bar */
    .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    /* Change the color of links on hover */
    .topnav a:hover {
        background-color: #ddd;
        color: #2823b5;
    }

    /* Add a color to the active/current link */
    .topnav a.active {
        background-color: #ff37b6;
        color: white;
    }
</style>

</html>