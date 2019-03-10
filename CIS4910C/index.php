<!DOCTYPE HTML>

    <?php

    $serverName = "cmtracker.database.windows.net, 1433";
    $connectionInfo = array("Database"=>"CMTracker", "UID"=>"cmason", "PWD"=>"rt28bsj!");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);

    if( $conn ) {
    echo "Connection established.<br />";
    }else{
    echo "Connection could not be established.<br />";
    die( print_r( sqlsrv_errors(), true));
    }
    ?>

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

    <form id='login' method='post' accept-charset='UTF-8'>

        <fieldset>

            <legend>Login</legend>
            <input type='hidden' name='submitted' id='submitted' value='1' />


            <label for='Username'>UserName*:</label>
            <input type='text' name='Username' id='Username' maxlength="50" />


            <label for='Password'>Password*:</label>
            <input type='password' name='Password' id='Password' maxlength="50" />

            <input type='submit' name='Submit' value='Submit' />
        </fieldset>
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
