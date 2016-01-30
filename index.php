<!DOCTYPE html>
<html>
<head>
    <title>Micro Blog</title>
    <link rel="stylesheet" type="text/css" href="css/font.css">
    <link rel="stylesheet" type="text/css" href="fonticons/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<header>
	<div class="header">
		<div class="sitename"><span class="fa fa-fw fa-html5"></span> Micro Blog</div>
		<div class="linkRight">
			<span class="fa fa-fw fa-envelope-o"></span>
		</div>
	</div>
</header>
<section>
	<div class="left">
		<img src="images/main.png">
	</div>
	<div class="right">
		<div class="card">
			<div class="head">Login</div>
			<div class="form">
				<form action="start/login.php" method="post">
					<input type="text" name="email" placeholder="enter your email"><br>
					<input type="password" name="password" placeholder="enter your password"><br>
					<input type="submit" value="Sign In" class="submitButton">
				</form>
			</div>
		</div>
		<div class="card">
			<div class="head">Register</div>
			<div class="form">
				<form action="start/register.php" method="post">
					<input type="text" name="fname" placeholder="enter your first name"><br>
					<input type="text" name="lname" placeholder="enter your last name"><br>
					<input type="text" name="contact" placeholder="enter your contact number"><br>
					<input type="text" name="email" placeholder="enter your email"><br>
					<input type="password" name="password" placeholder="enter your password"><br>
					<input type="submit" value="Sign Up" class="submitButton">
				</form>
			</div>
		</div>
	</div>
</section>
<aside>
	
</aside>
<footer>
	
</footer>
</body>
</html>