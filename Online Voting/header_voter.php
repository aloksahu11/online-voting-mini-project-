<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="jscript/validation.js" type="text/javascript"></script>
    <title>Voter</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

</head>
<style>
     .abc{
            color:aqua;
             font-size: 1rem;
         text-decoration: none;
           font-size: 18px;
           position: relative;
     
        }
        .abc:hover{
            color:#ffffff;
        }
        .abc::after{
  content: "";
  width: 0;
  height: 3px;
  background-color:aqua;
   position:absolute; 
   left: 0;
  bottom: -10px;
  transition: 0.5s; 
   
}
.abc:hover:after{
    width:100%;
}
.ab{
    color:aqua;
}
</style>
<body>

    <div class="container">
        <nav class="navbar navbar-default navbar-fixed-top navbar-inverse
    " role="navigation">
            <div class="container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand headerFont text-lg "><strong class="ab">Online Voting System</strong></a>
                </div>

                <div class="collapse navbar-collapse" id="example-nav-collapse">
                    <ul class="nav navbar-nav">

                        <li><a href="voter.php"><span class="subFont"><strong class="abc">Home</strong></span></a></li>
                        <li><a href="profile.php"><span class="subFont"><strong class="abc">Profile</strong></span></a></li>
                        <li><a href="lan_view.php"><span class="subFont"><strong class="abc">Vote Results</strong></span></a></li>

                    </ul>
                    <span class="normalFont"><a href="logout.php" class="btn btn-danger navbar-right navbar-btn" style="border-radius:0%">Logout</a></span></button>
                </div>
        </nav>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>