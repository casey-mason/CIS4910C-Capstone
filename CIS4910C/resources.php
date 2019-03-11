<?PHP

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
header ("Location: index.html");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/capstone.css" rel="stylesheet">

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
                            <li><a href="homepage.html">Home</a></li>
                            <li><a href="aboutme.html">About CM</a></li>
                            <li><a href="waystosave.html">Ways to Save</a></li>
                            <li><a href="calculator.html">Calculator</a></li>
                            <li class="active"><a href="resources.html">Resources</a></li>
                        </ul>
                    </div>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>
    </div>

    <table>
       
        <li> Financial Advisor </li>
        <li> Loan Assistance Program </li>
  
    </table>
    
    Can't see what you are looking for? Submit your name, email, and brief description of your question and we will get back to you as soon as possible

    <br /><br />

    <input id="Name" type="text" value="Name" /> <br /><br />

    <input id="Email" type="text" value="Email"/> <br /> <br />

    <textarea id="BriefDescription" rows="6" cols="40" value="Brief Description"></textarea><br /><br />
    
    <input id="Submit1" type="submit" value="submit" onclick="" />

    <br />
    <br />
    <div class="row">
        <div class="col-md-4"> <img src="images\saving.jpg" alt="candle" width="200" height="200"> </div>
        <div class="col-md-4"> <img src="images\dollarrose.jpg" alt="candle" width="200" height="200"> </div>
        <div class="col-md-4"> <img src="images\dollarsign.jpg" alt="candle" width="200" height="200"> </div>
    </div>

    <div class="row">
        <div class="col-md-6"> Casey Mason-Creator of CMTracker </div>
        <div class="col-md-6"> Further Questions?? <a href="http://www.gmail.com">Click here to email me today!! </a> </div>
    </div>

</body>
</html>