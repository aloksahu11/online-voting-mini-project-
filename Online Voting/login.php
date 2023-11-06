<!DOCTYPE html>

<html>
<style>
	.az1{
	background-color: aqua;
	color:white;
}
.az1:hover{
	background-color: white;
	color:aqua;
	border:3px solid aqua;
}
.specialHead{
	background-color:aqua;
	color:black;
	height:40px;
	padding:3px;
}
.az{
	color: black;


}
.az:hover{
	border: 2px solid aqua;
}
.az122{
	background-color:black;
}

</style>
<head>
	<?php require 'header.php'; ?>
</head>

<body class=az122>
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
	
	<div class="container" style="padding:100px;">
		<div class="row">
			<div class="col-sm-12" style="border:2px outset aqua;">

				<div class=" text-center ">
					<h3 class="specialHead">Login for Voting!.. </h3>
				</div>

				<?php global $nam;
				echo $nam; ?>
				<?php global $error;
				echo $error; ?>
				<br>
				<center>
					<font size="4">
						<form action="login_action.php" method="post" id="myform">
							Username : 
							<input type="text" name="username" value="" class="az" required>
							<br>
							<br>
							Password :
							<input type="password" name="password" value=""  class="az" required>
							<br>
							<br>
							<input type="submit" name="login" value="Login" class="az1" >
						</form>
					</font>
				</center>
				<br><br>
			</div>
		</div>
	</div>
	</div>
	<script type="text/javascript">
		var frmvalidator = new Validator("myform");
		frmvalidator.addValidation("username", "req", "Please Enter Username");
		frmvalidator.addValidation("username", "maxlen=50");
		frmvalidator.addValidation("password", "req", "Please Enter Password");
	</script>
</body>

</html>