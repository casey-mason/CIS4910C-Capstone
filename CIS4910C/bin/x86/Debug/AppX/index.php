﻿<?php

session_start();

$username = "username";
$password = "password";

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
header("Location: resources.php");
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password)

{
$_SESSION['loggedin'] = true;
header("Location: resources.php");

}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/capstone.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <a href="homepage.html"> <center> <img width="300" height="150" src="images/cmletter.png"> </center> </a>
    <center><h1> CM Tracker </h1></center>
    <div class="container">
        <!--Static navbar -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button class="navbar-toggle" aria-expanded="true" aria-controls="navbar" type="button" data-toggle="collapse" data-target="#navbar">...</button>
                    <div class="navbar-collapse collapse in" id="navbar" aria-expanded="true" style="">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="homepage.html">Home</a></li>
                            <li><a href="aboutme.html">About CM</a></li>
                            <li><a href="waystosave.html">Ways to Save</a></li>
                            <li><a href="calculator.html">Calculator</a></li>
                            <li><a href="resources.html">Resources</a></li>
                        </ul>
                    </div>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>
    </div>
    <p1>Welcome to CM Tracker, the one stop for help with all your loan payment needs. Whether it is trying to figure out ways to save money or <br /> not knowing where to go for loan specific questions, we are here for you. </p1>
    <br />
    <br />
    <br />

    <form method="post" action="resources.html">

        UserName*:
        <input type="text" name="Username">

        Password*:
        <input type="password" name="Password">

        <input type="submit" value="Submit">

    </form>



    <br />
    <br />
    <div class="row">
        <div class="col-md-4"> <img src="images\saving.jpg" alt="loans" width="200" height="200"> </div>
        <div class="col-md-4"> <img src="images\dollarrose.jpg" alt="loans" width="200" height="200"> </div>
        <div class="col-md-4"> <img src="images\dollarsign.jpg" alt="loans" width="200" height="200"> </div>
    </div>

</body>
</html>
