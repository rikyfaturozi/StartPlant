<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
<<<<<<< HEAD
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/logins.css">
=======
	<link rel="stylesheet" type="text/css" href="style.css">
>>>>>>> 9618225371b1baf7e10c70b3c014e970fa718dac
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<div class="bo">
		<div class="gmbr">

			<img src="<?php echo base_url()?>assets/img/gambar1.png" alt="">
		</div>
		<div class="login">
			<div class="logo">
				<img src="<?php echo base_url()?>assets/img/logo.jpg">

				<h4> StartPlant </h4>
			</div>
			<div class="head">
				<h5>Welcome back!</h5>
				<h2>Login To Your Account</h2>
			</div>
			<form action="login.php" method="post" onSubmit="return validasi()">
				<div>
					<label>Email:</label>
					<input type="text" name="email" id="email" />
				</div>
				<div>
					<label>Password:</label>
					<input type="password" name="password" id="password" />
				</div>
				<div class="remember">
					<input type="checkbox" name="remember" value="remember me">	Remember me<br>
				</div>
					<a href="#">Forgot password?</a>
				<div>
					<input type="submit" value="Login" class="tombol">
				</div>
					<center><p>Or Sign up with</p><center>
				<div class="fb">
<<<<<<< HEAD
					<a href="#"><img src="<?php echo base_url()?>assets/img/fb.jpg"></a>
					<a href="#"><img src="<?php echo base_url()?>assets/img/google.jpg"></a>
				</div>
					<p> Dont have an account? <a href="<?php echo base_url(). 'index.php/home/registrasi'?>"> Register now </p>
=======
					<a href="#"><img src='image/fb.jpg'></a>
					<a href="#"><img src='image/google.jpg'></a>
				</div>
					<p> Dont have an account? <a href="#"> Register now </p>
>>>>>>> 9618225371b1baf7e10c70b3c014e970fa718dac
			</form>
		</div>
		
	</div>
</body>
 
<<<<<<< HEAD
=======
<script type="text/javascript">
	function validasi() {
		var email = document.getElementById("email").value;
		var password = document.getElementById("password").value;		
		if (email != "" && password!="") {
			return true;
		}else{
			alert('Email dan Password harus di isi !');
			return false;
		}
	}
 
</script>

>>>>>>> 9618225371b1baf7e10c70b3c014e970fa718dac
</html>