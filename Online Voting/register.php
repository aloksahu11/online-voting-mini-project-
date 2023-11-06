<!DOCTYPE html>

<html>

<head>
	<?php require 'header.php'; ?>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<style>
.ab12{
	background-color: aqua;
}
.ab13{
	background-color: black;
}
.specialHead{
	color:black;
}
.az{
	color: black;


}
.az:hover{
	border: 2px solid aqua;
}
.az1{
	background-color: aqua;
	color:white;
}
.az1:hover{
	background-color: white;
	color:aqua;
	border:3px solid aqua;
}

</style>
<body class ="ab13">
	<div class="col-sm-12">
		<?php
		if (!isset($_SESSION)) {
			session_start();
		}
		if (isset($_SESSION['SESS_NAME']) != "") {
			header("Location: voter.php");
		}
		?>
	</div>
	<br>
	<br>

	<div class="col-sm-12">
		<?php global $nam;
		echo $nam; ?>
		<?php global $error;
		echo $error; ?>
	</div>

	<div class="container" style="padding:100px;">
		<div class="row">
			<div class="col-sm-12" style="border:2px outset aqua;">
				<div class="page-header text-center ab12">
					<h3 class="specialHead">Register!.. </h3>
				</div>

				<center>
					<font size="4">
						<form action="reg_action.php"  onsubmit="myFunction()" method="post" id="myform">
							Firstname:
							<input type="text" name="firstname" value="" class="az" required/>
							<br>
							<br>
							Lastname:
							<input type="text" name="lastname" value="" class="az" required/>
							<br>
							<br>
							Username:
							<input type="text" name="username" value="" class="az" required/>
							<br>
							<br>
							Password:
							<input type="password" name="password" value=""  class="az" required/>
							<br>
							<br>
							<div class="g-recaptcha" data-sitekey="6LeD3hEUAAAAAKne6ua3iVmspK3AdilgB6dcjST0"></div>
							<br>
							<br>
							
							<input type="submit" name="submit" value="submit" onclick="alok()"  class="az1"/>
						</form>
					</font>
				</center>
				<br><br>
			</div>
		</div>
	</div>
	<script type="text/javascript">
f

		var frmvalidator = new Validator("myform");
		frmvalidator.addValidation("firstname", "req", "Please enter student firstname");
		frmvalidator.addValidation("firstname", "maxlen=50");
		frmvalidator.addValidation("lastname", "req", "Please enter student lastname");
		frmvalidator.addValidation("lastname", "maxlen=50");
		frmvalidator.addValidation("username", "req", "Please enter student username");
		frmvalidator.addValidation("username", "maxlen=50");
		frmvalidator.addValidation("password", "req", "Please enter student password");
		frmvalidator.addValidation("password", "minlen=6", "Password must not be less than 6 characters.");

         function myfunction(){  
			swal("Good job!", "You clicked the button!", "success")
			 }




	</script>

<script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">


</body>

</html>