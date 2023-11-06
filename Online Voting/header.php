<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="jscript/validation.js" type="text/javascript"></script>

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Online Voting System</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>
        .headerFont {
            font-family: 'Ubuntu', sans-serif;
            font-size: 24px;
        }

        .subFont {
            font-family: 'Raleway', sans-serif;
            font-size: 14px;

        }

        .specialHead {
            font-family: 'Oswald', sans-serif;
        }

        .normalFont {
            font-family: 'Roboto Condensed', sans-serif;
        }
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

</head>

<body>

    <div class="container">
        <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
            <div class="container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand headerFont "><strong class="ab"> Online Voting System </storng></a>
                </div>

                <div class="collapse navbar-collapse" id="example-nav-collapse">
                    <ul class="nav navbar-nav">
                     <li><a href="register.php"><span class="subFont"><strong class="abc">Register</strong></span></a></li>
                        <li><a href="login.php"><span class="subFont"><strong class="abc">Login</strong></span></a></li>
                    </ul>
                </div>

            </div>

    </div>
    </nav>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>