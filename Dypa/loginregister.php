<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Log in/Register</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="arxiki.html" class="w3-bar-item w3-button w3-padding-large">Αρχική</a>
    <a href="locations.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Τοποθεσίες</a>
    <a href="museums.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Μουσεία</a>
    <a href="loginregister.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Log in/Register</a>
    <a href="contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Επικοινωνία</a>
    <div class="w3-dropdown-hover w3-hide-small"></div>
  </div>
</div>  

<b>	

<div class="container">
	<div class="login-box">
		<div class="row" style="margin-top:-29px">
				<div class="col-md-6 lofin-left" style="margin-top:-65px">
				<h2  style="color:#CCCCCC">Sign Up</h2>
				
				<form action="insert.php" method="post" style="color:aqua">
					<div class="form-group">
						<label>Museum Name</label>
						<input type="text" name="museum" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="passwd" class="form-control">
					</div>
					<div class="form-group">
						<label>Region</label>
						<input type="text" name="region" class="form-control">
					</div>
					<div class="form-group">
						<label>Country</label>
						<input type="text" name="country" class="form-control">
					</div>

	
			<button type="submit" class="btn btn-primary">Register </button>
			</form>
			<?php 
		if(@$_GET['EmptyS'] == true)
					{
			?>
				
		<div class="alert-light text-danger text-center py-1"><?php echo $_GET['EmptyS']?></div>
				
		<?php
			}
		?>

		</div>
	</div>
	</div>
	
	</b>
</body>

</html>
