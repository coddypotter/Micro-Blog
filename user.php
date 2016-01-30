<?php
include 'includes/sessions.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $fname;?></title>
    <link rel="stylesheet" type="text/css" href="css/font.css">
    <link rel="stylesheet" type="text/css" href="fonticons/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/user.css">
</head>
<body>
<header>
	<div class="header">
		<div class="sitename"><span class="fa fa-fw fa-html5"></span> Micro Blog</div>
		<div class="linkRight">
			<a href="search.php"><span class="fa fa-fw fa-search"></span></a>
			<a href="start/logout.php"><span class="fa fa-fw fa-sign-in"></span></a>
		</div>
	</div>
</header>
<section>
	<div class="left">
		<div class="card">
			<div class="avatar">
				<img src="<?php echo $pic;?>">
			</div>
		</div>
		<div class="card">
			<b class="name"><?php echo $fname.' '.$lname;?></b>
		</div>
	</div>	
	<div class="right">
		<div class="card">
			<textarea class="textarea" placeholder="What's Up?"></textarea><br>
			<button class="post">Update</button>
			<span class="charCount">0</span>
		</div>
		<div class="feeds">
			
		</div>
	</div>
</section>
<aside>
	
</aside>
<footer>
	
</footer>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/user.js"></script>
</body>
</html>