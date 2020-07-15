<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Compu-Parts Login</title>
	<link rel="shortcut icon" href="logot/Logobcg.png" type="image/png">
	<link rel="stylesheet" href="CSS/login.css">
	<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@400;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="jquery.bxslider.css">

</head>
<body>

	<?php include 'Header-Footer/Header.php';?>

	 <div class="container" id="container">
		<div class="form-container sign-up-container">
			<form id="formReg" name="forma" method="POST" action="signup.php" onsubmit="return validate(event)">
				<h1>Create Account</h1>
				<div class="social-container">
					<a class="social"><img src="Foto/facebook.png" alt="" width="40px" height="40"><i class="fab fa-facebook-f"></i></a>
					<a class="social"><img src="Foto/Google.png" alt="" width="40px" height="40px"><i class="fab fa-google-plus-g"></i></a>
					<a class="social"><img src="Foto/LinkedIn.png" alt="" width="40px" height="40px"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>or use your email for registration</span>
				<input type="text"  name="emri" id="e" class="inputat" placeholder="Name"/>
				<div class="error" id="e1"></div>
				<input type="email" class="inputat" placeholder="Email" name="email" id="em" />
				<div class="error" id="e2"></div>
				<input type="password" class="inputat" id="psw" placeholder="Password" name="password" />
				<div class="error" id="e3"></div>
				<input type="submit" class="butonat" id="sUp" value=" Sign Up" name="submit">
			</form>  
		</div>

	<div class="form-container sign-in-container">
		<form name="forma2" method="POST" action="loginnn.php" onsubmit="return validate1(event)">
			<h1>Sign in</h1>
			<div class="social-container">
				<a class="social"><img src="Foto/facebook.png" alt="" width="40px" height="40"><i class="fab fa-facebook-f"></i></a>
				<a class="social"><img src="Foto/Google.png" alt="" width="40px" height="40px"><i class="fab fa-google-plus-g"></i></a>
				<a class="social"><img src="Foto/LinkedIn.png" alt="" width="40px" height="40px"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="text" class="inputat" placeholder="Email" name="email" id="email"/>
			<div class="error" id="e4"></div>
			<input type="password" class="inputat" placeholder="Password" name="password"  id="passs"/>
			<div class="error" id="e5"></div>
			<a href="">Forgot your password?</a>
			<input type="submit"class="butonat" id="sIn" value="Sign In" name="submit">
		</form> 
	</div>
	
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<img src="Logot/Logometekstt.png" width="160px" height="95px" class="logoja">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="butonat" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<img src="Logot/Logometekstt.png" width="160px" height="95px" class="logoja">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="butonat" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<!-- <fieldset id="message">
	<legend>Requirements</legend>
		<h3>Password must contain the following:</h3>
		<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
		<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
		<p id="number" class="invalid">A <b>number</b></p>
		<p id="length" class="invalid">Minimum <b>8 characters</b></p>
</fieldset>  -->

	<script src="JavaScript/chagneLoginSignup.js"></script>
	<!-- <script src="JavaScript/login.js"></script> -->
	<script src="JavaScript/register.js"></script>
	<script src="JavaScript/navBar.js"></script>
	<script src="JavaScript/login.js"></script>
	
<!-- <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script>
		$.validate({
			errorMessageClass: "error",
		});
	</script> -->
	

	

</body>
</html>