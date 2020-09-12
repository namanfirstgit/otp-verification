<!DOCTYPE html>
<html>
<head>
	<title>Send Otp</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
<h1 class="text-center"></h1>
<hr>
	<div class="row">
	<div class="col-md-9 col-md-offset-2">
		<?php
		if(isset($_POST['verifyotp'])) {
				$otp = $_POST['otp'];
				if($_COOKIE['otp'] == $otp) {
					echo "Congratulation, Your mobile is verified.";
				} else {
					echo "Please enter correct otp.";
				}
			}
		?>
	</div>
		</div>
</div>
</body>
</html>	
