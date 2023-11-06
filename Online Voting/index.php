<!DOCTYPE html>

<html>
<style>

.a1{
    color: aqua;
  
}
.a2{
 background-color:black;
}
.a3{
    padding-top:50px;
}
.a5{
  
    padding-top:50px;  
}
.img-responsive{
    width:600px;
    height: 500px;
      
}
.a4{
    padding-left:100px;
    padding-top:100px;
}
.a23{
   padding-left:105px;
}

</style>
<head>
    <?php
    require 'header.php';
    ?>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

</head>

<body class="a2">
    <?php
    session_start();
    if (isset($_SESSION['SESS_NAME']) != "") {
        header("Location: voter.php");
    }
    ?>
    <?php global $msg;
    echo $msg; ?>
    
    <main class="a5 ">
    <!-- <div class="col-md-4 col-sm-6 col-xs-12 a6" ><img src="images/now2.jpg"alt="" class="img-responsive"> </div>
    <div class="col-md-2 col-sm-6 col-xs-12 "></div> -->
        <div class="col-md-6 col-sm-6 col-xs-12 "><img src="images/now22.jpg" class="img-responsive img-circle"></div>

        <div class="containere col-md-1 col-sm-6 col-xs-12">
            <div class="container" >
                <div class="row">
                    

                        <div class="conatiner" id="featuresTab">
                            <div class="row">
                                <div class="a4">
                              
                                        <h1 class="specialHead a1" style="font-size:44px;">Online Voting System</h1>
                                        <p class="normalFont a1 a23" style="font-size:24px;">Welcome!</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </main>
                        <div class="conatiner a3" id="featuresTab">
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                   
                                        <h1 class="normalFont a1" style="font-size:44px;">WHAT IS IT?</h1>
                                        <p class="subFont a1" style="font-size:24px;">An Interactive Way of Election</p>
                                    </div>
                                </div>
                            </div>
                        </div> 


                         <div class="conatiner" style="padding:50px;" id="aboutTab">
                            <div class="row">

                                <div class="col-sm-4 text-center">

                                    <h2 class="normalFont a1" style="font-size:28px;">Register.</h2>
                                    <p class="a1">You Just Need Basic Details of Yours and We Will Let You Vote</p>

                                </div>
                                <div class="col-sm-4 text-center">

                                    <h2 class="normalFont a1" style="font-size:28px;">Profile</h2>
                                    <p class="a1">Shows You Details about Your Votes. </p>

                                </div>
                                <div class="col-sm-4 text-center">
 
                                    <h2 class="normalFont a1" style="font-size:28px;">Statitics</h2>
                                    <p class="a1">Shows You the Vote Results of the Election.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 



            <!-- Footer -->
            <nav class="navbar fixed-bottom navbar-light bg-light">
                <footer class="page-footer font-small special-color-dark pt-4">
                    
                </footer>
            </nav>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>

        </div>
    
</div>
</body>

</html>