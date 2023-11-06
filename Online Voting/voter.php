<!DOCTYPE html>

<html>
    <style>
        .aq{
            color:aqua;
            background-color: black;
        }
        ..specialHead{
	background-color:aqua;
	color:black;
	height:40px;
	padding:3px;
}
.az1{
	background-color: aqua;
	color:white;
    border:3px solid #ffffff;
}
.az1:hover{
	background-color: white;
	color:aqua;
	border:3px solid aqua;
}
    </style>

<head>
    <?php require 'header_voter.php'; ?>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

</head>

<body class="aq">
    <div class="col-sm-12">
        <?php
        if (!isset($_SESSION)) {
            session_start();
        }
        include "auth.php";
        ?>
    </div>
    <div class="container" style="padding:100px;">
        <div class="row">
            <div class="col-sm-12" style="border:2px outset aqua;">

                <div class=" text-center">
                    <h2 class="specialHead"> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h2>
                    <p class="normalFont" style="font-size:18px;">You Could Vote</p>
                </div>

                <form action="submit_vote.php" name="vote" method="post" id="myform"  >
                    <center >
                        <p class="normalFont" style="font-size:24px;"> What is your favorite programming language? </p><BR>
                <div>        <input type="radio" name="lan" value="JAVA"> &emsp;JAVA &ensp;  &ensp;  &ensp;  &ensp;&ensp;  &ensp;    &ensp;<img src="images/a1.png" width="50px" class="img-circle" height="50px"/> </div><BR>
                  <div>      <input type="radio" name="lan" value="PYTHON">&emsp;PYTHON &ensp;  &ensp;  &ensp;&ensp;  &ensp;    <img src="images/a2.jfif" width="50px" class="img-circle" height="50px"/> </div><BR>
                  <div>          <input type="radio" name="lan" value="C++">&emsp; C++  &ensp;  &ensp;  &ensp;  &ensp;&ensp;  &ensp;  &ensp;  &ensp; <img src="images/a2.png" width="50px" class="img-circle" height="50px"/></div><BR>
                  <div>       <input type="radio" name="lan" value="PHP"> &emsp;PHP &ensp;  &ensp;  &ensp;  &ensp;&ensp;  &ensp;  &ensp;  &ensp; <img src="images/a3.png" width="50px" class="img-circle" height="50px"/></div><BR>
                  <div>       <input type="radio" name="lan" value=".NET">&emsp; .NET &ensp;  &ensp;  &ensp;  &ensp;&ensp;  &ensp;    &ensp; <img src="images/a5.png" width="50px" class="img-circle" height="50px"/></div><BR>
                        </font>
                    </center><br>
                    <?php global $msg;
                    echo $msg; ?>
                    <?php global $error;
                    echo $error; ?>
                    <center><buttom ><input type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" onclick="alok()" class="az1" /></buttom></center>
                    <BR>
                </form>
            </div>
        </div>
    </div>
    
</body>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
<script>
                       function alok(){


                        confirm("successfully submited your vote");

                       }
</script>
</html>