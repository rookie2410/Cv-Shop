<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
 <link rel="icon" href="Logo.jpg" type="image/jpg" sizes="16x16">
  <title>Responsive-Login-Form</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css'>
<link rel="stylesheet" href="./style.css">

<!-- The video -->
<video autoplay muted loop id="myVideo">
  <source src="ai1.mp4" type="video/mp4">
</video>

</head>
<body>

<div class="container" id="container">
	<!-- Registration Conttainer -->
	<div class="form-container sign-up-container">
		<form action="register.php" method="post">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" name='username'/>
			<input type="password" placeholder="Password" name='password' />
			<button>Sign Up</button>
		</form>
	</div>
	<!-- Sign-in Container -->
	<div class="form-container sign-in-container">
		<form action="login.php" method="post">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="text" placeholder="Name" name='username'/>
			<input type="password" placeholder="Password" name='password'/>
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, There!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href=""> Roshan Gupta </a>
	</p>
</footer>
  <script  src="./js/script.js"></script>

</body>
</html>
