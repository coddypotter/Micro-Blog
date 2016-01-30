<?php
include 'includes/sessions.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $fname;?></title>
    <link rel="stylesheet" type="text/css" href="css/font.css">
    <link rel="stylesheet" type="text/css" href="fonticons/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/search.css">
</head>
<body>
<header>
	<div class="header">
		<div class="sitename"><span class="fa fa-fw fa-html5"></span> Micro Blog</div>
		<div class="linkRight">
			<a href="user.php"><span class="fa fa-fw fa-home"></span></a>
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
			<input type="text" class="searchbox" placeholder="Search" /><br>
		</div>
		<div class="results">
			
		</div>
	</div>
</section>
<aside>
	
</aside>
<footer>
	
</footer>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/search.js"></script>
</body>
</html>