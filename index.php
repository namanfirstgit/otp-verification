<!DOCTYPE html>
<html>
<head>
	<title>Send Otp</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
<h1 class="text-center">mobile varification</h1>
<hr>
	<div class="row">
	<div class="col-md-9 col-md-offset-2">
        <form role="form" method="post" action="index1.php" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-9 form-group">
                    <label for="uname">Name</label>
                    <input type="text" class="form-control" id="uname" name="uname" value="" maxlength="10" placeholder="Enter your name" required="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" value="" maxlength="10" placeholder="Enter valid mobile number" required="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 form-group">
                    <button type="submit" name="sendopt" class="btn btn-lg btn-success btn-block">Send OTP</button>
                </div>
            </div>
            </form>
           
	</div>
	</div>
</div>
</body>
</html>
